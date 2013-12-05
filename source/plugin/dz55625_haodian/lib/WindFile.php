<?php

/**
 * �ļ�������
 */
class WindFile {
	/**
	 * �Զ��ķ�ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const READ = 'rb';
	/**
	 * �Զ�д�ķ�ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const READWRITE = 'rb+';
	/**
	 * ��д�ķ�ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const WRITE = 'wb';
	/**
	 * �Զ�д�ķ�ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const WRITEREAD = 'wb+';
	/**
	 * ��׷��д�뷽ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const APPEND_WRITE = 'ab';
	/**
	 * ��׷�Ӷ�д�뷽ʽ���ļ������н�ǿ��ƽ̨��ֲ��
	 * 
	 * @var string 
	 */
	const APPEND_WRITEREAD = 'ab+';
	
	/**
	 * ɾ���ļ�
	 * 
	 * @param string $filename �ļ�����
	 * @return boolean
	 */
	public static function del($filename) {
		return @unlink($filename);
	}

	/**
	 * �����ļ�
	 * 
	 * @param string $fileName          ������ļ���
	 * @param mixed $data               ���������
	 * @param boolean $isBuildReturn    �Ƿ���װ�����������return $params�ĸ�ʽ�����û�����Ա��������ķ�ʽ����,Ĭ��Ϊtrue����return�ķ�ʽ����
	 * @param string $method            ���ļ���ʽ��Ĭ��Ϊrb+����ʽ
	 * @param boolean $ifLock           �Ƿ���ļ�������Ĭ��Ϊtrue������
	 */
	public static function savePhpData($fileName, $data, $isBuildReturn = true, $method = self::READWRITE, $ifLock = true) {
		$temp = "<?php\r\n ";
		if (!$isBuildReturn && is_array($data)) {
			foreach ($data as $key => $value) {
				if (!preg_match('/^\w+$/', $key)) continue;
				$temp .= "\$" . $key . " = " . self::varToString($value) . ";\r\n";
			}
			$temp .= "\r\n?>";
		} else {
			($isBuildReturn) && $temp .= " return ";
			$temp .= self::varToString($data) . ";\r\n?>";
		}
		return self::write($fileName, $temp, $method, $ifLock);
	}

	/**
	 * д�ļ�
	 *
	 * @param string $fileName �ļ�����·��
	 * @param string $data ����
	 * @param string $method ��дģʽ,Ĭ��ģʽΪrb+
	 * @param bool $ifLock �Ƿ����ļ���Ĭ��Ϊtrue������
	 * @param bool $ifCheckPath �Ƿ����ļ����еġ�..����Ĭ��Ϊtrue�����
	 * @param bool $ifChmod �Ƿ��ļ����Ը�Ϊ�ɶ�д,Ĭ��Ϊtrue
	 * @return int ����д����ֽ���
	 */
	public static function write($fileName, $data, $method = self::READWRITE, $ifLock = true, $ifCheckPath = true, $ifChmod = true) {
		touch($fileName);
		if (!$handle = fopen($fileName, $method)) return false;
		$ifLock && flock($handle, LOCK_EX);
		$writeCheck = fwrite($handle, $data);
		$method == self::READWRITE && ftruncate($handle, strlen($data));
		fclose($handle);
		$ifChmod && chmod($fileName, 0777);
		return $writeCheck;
	}

	/**
	 * ��ȡ�ļ�
	 *
	 * @param string $fileName �ļ�����·��
	 * @param string $method ��ȡģʽĬ��ģʽΪrb
	 * @return string ���ļ��ж�ȡ������
	 */
	public static function read($fileName, $method = self::READ) {
		$data = '';
		if (!$handle = fopen($fileName, $method)) return false;
		while (!feof($handle))
			$data .= fgets($handle, 4096);
		fclose($handle);
		return $data;
	}

	/**
	 * @param string $fileName
	 * @return boolean
	 */
	public static function isFile($fileName) {
		return $fileName ? is_file($fileName) : false;
	}

	/**
	 * ȡ���ļ���Ϣ
	 * 
	 * @param string $fileName �ļ�����
	 * @return array �ļ���Ϣ
	 */
	public static function getInfo($fileName) {
		return self::isFile($fileName) ? stat($fileName) : array();
	}

	/**
	 * ȡ���ļ���׺
	 * 
	 * @param string $filename �ļ�����
	 * @return string
	 */
	public static function getSuffix($filename) {
		if (false === ($rpos = strrpos($filename, '.'))) return '';
		return substr($filename, $rpos + 1);
	}
	/**
	 * ��������ֵת��Ϊ�ַ���
	 *
	 * @param mixed $input   ����
	 * @param string $indent ����,Ĭ��Ϊ''
	 * @return string
	 */
	public static function varToString($input, $indent = '') {
		switch (gettype($input)) {
			case 'string':
				return "'" . str_replace(array("\\", "'"), array("\\\\", "\\'"), $input) . "'";
			case 'array':
				$output = "array(\r\n";
				foreach ($input as $key => $value) {
					$output .= $indent . "\t" . self::varToString($key, $indent . "\t") . ' => ' . self::varToString(
						$value, $indent . "\t");
					$output .= ",\r\n";
				}
				$output .= $indent . ')';
				return $output;
			case 'boolean':
				return $input ? 'true' : 'false';
			case 'NULL':
				return 'NULL';
			case 'integer':
			case 'double':
			case 'float':
				return "'" . (string) $input . "'";
		}
		return 'NULL';
	}
}