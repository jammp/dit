function get_rate(rate){
	rate=rate.toString();
	var s;
	var g;
	jq("#g").show();
	if (rate.length>=3){
		s=10;
		g=0;
		jq("#g").hide();
	}else if(rate=="0"){
		s=0;
		g=0;
	}else{
		s=rate.substr(0,1);
		g=rate.substr(1,1);
	}
	jq("#s").text(s);
	jq("#g").text("."+ g);
	jq(".big_rate_up").animate({width:(parseInt(s)+parseInt(g)/10) * 14,height:26},1000);
	jq(".big_rate span").each(function(){
		jq(this).mouseover(function(){
			
		})
	})
	jq(".big_rate").mouseout(function(){
		jq("#s").text(s);
		jq("#g").text("."+ g);
		jq(".big_rate_up").width((parseInt(s)+parseInt(g)/10) * 14);
	})
}


jq(document).ready(function(){ 
jq(".listSj dl").mouseover(function(){ 
//�������Ƶ�classΪstripe_tb�ı���tr��ʱ��ִ�к���
jq(this).addClass("over");}).mouseout(function(){ 
//���������classֵΪover�����ҵ����һ������ʱִ�к���
jq(this).removeClass("over");}) //�Ƴ����е�class
jq(".listSj dl:even").addClass("alt");
//��classΪstripe_tb�ı���ż�������classֵΪalt
});


(function (jq) {
            jq.fn.extend({
                Scroll: function (opt, callback) {
                    if (!opt) var opt = {};
                    var _btnUp = jq("#" + opt.up); //Shawphy:���ϰ�ť      
                    var _btnDown = jq("#" + opt.down); //Shawphy:���°�ť
                    var _this = this.eq(0).find("ul:first");
                    var lineH = _this.find("li:first").height(); //��ȡ�и�     
                    var line = opt.line ? parseInt(opt.line, 10) : parseInt(this.height() / lineH, 10); //ÿ�ι�����������Ĭ��Ϊһ�������������߶�
                    var speed = opt.speed ? parseInt(opt.speed, 10) : 600; //���ٶȣ���ֵԽ���ٶ�Խ�������룩 
                    var m = line;  //���ڼ���ı���
                    var count = _this.find("li").length; //�ܹ���<li>Ԫ�صĸ���
                    var upHeight = line * lineH;
                    function scrollUp() {
                        if (!_this.is(":animated")) {  //�ж�Ԫ���Ƿ������ڶ�������������ڶ���״̬����׷�Ӷ�����
                            if (m < count) {  //�ж� m �Ƿ�С���ܵĸ���
                                m += line;
                                _this.animate({ marginTop: "-=" + upHeight + "px" }, speed);
                            }
                        }
                    }
                    function scrollDown() {
                        if (!_this.is(":animated")) {
                            if (m > line) { //�ж�m �Ƿ����һ������
                                m -= line;
                                _this.animate({ marginTop: "+=" + upHeight + "px" }, speed);
                            }
                        }
                    }
                    _btnUp.bind("click", scrollUp);
                    _btnDown.bind("click", scrollDown);
                }
            });
        })(jQuery);
      jq(function () {
            jq("#scrollDiv").Scroll({ line: 10, speed: 500,up: "btn1", down: "btn2" });
});        

//-----------------------------------------
