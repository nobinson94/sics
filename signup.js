function check_id()
{
    var x = document.getElementById("u_id").value;
    if (x == "") { document.getElementById("id_check").innerHTML = "아이디를 입력해주세요" }
   
    if (/^[A-Za-z0-9_]+$/.test(x)==0)
        document.getElementById("id_check").innerHTML = "숫자, 알파벳, _만 사용가능해요";
    else if(x.length<6)
    {
        document.getElementById("id_check").innerHTML = "너무 짧아요!";
        if (/^[A-Za-z0-9_]+$/.test(x) == 0)
            document.getElementById("id_check").innerHTML = "숫자, 알파벳, _만 사용가능해요";
    }
    else if (x.length > 10) {
        document.getElementById("id_check").innerHTML = "너무 길어요!";
        if (/^[A-Za-z0-9_]+$/.test(x) == 0)
            document.getElementById("id_check").innerHTML = "숫자, 알파벳, _만 사용가능해요";
    }
    else
    {
        document.getElementById("id_check").innerHTML = "중복확인을 해주세요!";
 
        if (/[A-Z]+/.test(x) == 0 || /[0-9]+/.test(x) == 0)
            document.getElementById("id_check").innerHTML = "적어도 대문자와 숫자는 하나 이상!";
        else {
            document.getElementById("id_check").innerHTML = "중복확인을 해주세요!";

               
        }
    }
   
}
function check_pass()
{
    var pass = getElementById("pwd").value;
    if (/^\d{4}$/.test(pass)==1)
        document.getElementByid("passcheck).innerHTML = "4자리 확인되었습니다.";

}
function check_ps() {//아직 특수기호에 대한 정의와 연속한 문자열 하지 않음
    var x = document.getElementById("u_ps").value;
    var num_pat = /(012)|(123)|(234)|(345)|(456)|(567)|(678)|(789)|(987)|(876)|(765)|(654)|(543)|(432)|(321)|(210)|(890)/;//연속숫자
    var alp_pat = /(abc)|(bcd)|(cde)|(def)|(efg)|(fgh)|(ghi)|(hij)|(ijk)|(jkl)|(klm)|(lmn)|(mno)|(nop)|(opq)|(pqr)|(qrs)|(rst)|(stu)|(tuv)|(uvw)|(vwx)|(wxy)|(zyx)|(yxw)|(xwv)|(wvu)|(vut)|(uts)|(tsr)|(srq)|(rqp)|(qpo)|(pon)|(onm)|(nml)|(mlk)|(lkj)|(kji)|(jih)|(ihg)|(hgf)|(gfe)|(fed)|(edc)|(dcb)|(cba)|(ABC)|(BCD)|(CDE)|(DEF)|(EFG)|(FGH)|(GHI)|(HIJ)|(IJK)|(JKL)|(KLM)|(LMN)|(MNO)|(NOP)|(OPQ)|(PQR)|(QRS)|(RST)|(STU)|(TUV)|(UVW)|(VWX)|(WXY)|(XYZ)|(ZYX)|(YXW)|(XWV)|(WVU)|(VUT)|(UTS)|(TSR)|(SRQ)|(RQP)|(QPO)|(PON)|(ONM)|(NML)|(MLK)|(LKJ)|(KJI)|(JIH)|(IHG)|(HGF)|(GFE)|(FED)|(EDC)|(DCB)|(CBA)/;
    var spc_pat = /[\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]/;

    if (x == "") { document.getElementById("ps_check").innerHTML = "비밀번호를 입력해주세요" }
    if (/^[A-Za-z0-9_\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]+$/.test(x) == 0)
        document.getElementById("ps_check").innerHTML = "숫자, 알파벳, 특수기호만 사용가능해요";
    else if (x.length < 6) {
        document.getElementById("ps_check").innerHTML = "너무 짧아요!";
        if (/^[A-Za-z0-9_\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]+$/.test(x) == 0 && spc_pat.test(x))
            document.getElementById("ps_check").innerHTML = "숫자, 알파벳, 특수기호만 사용가능해요";
        if (/(\w)\1\1/.test(x) == 1 || /(\W)\1\1/.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "동일한 문자열은 사용할 수 없습니다.!";
        else if (num_pat.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "연속된 문자열은 사용할 수 없습니다.!";
    }
    else if (x.length > 10) {
        document.getElementById("ps_check").innerHTML = "너무 길어요!";
        if (/^[A-Za-z0-9_\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]+$/.test(x) == 0)
            document.getElementById("ps_check").innerHTML = "숫자, 알파벳, 특수기호만 사용가능해요";
        if (/(\w)\1\1/.test(x) == 1 || /(\W)\1\1/.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "동일한 문자열은 사용할 수 없습니다.!";
        else if (num_pat.test(x) == 1 || alp_pat.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "연속된 문자열은 사용할 수 없습니다.!";
    }
    else {
        document.getElementById("ps_check").innerHTML = "좋아요!";
        if (/[A-Z]+/.test(x) == 0 || /[0-9]+/.test(x) == 0)
            document.getElementById("ps_check").innerHTML = "적어도 대문자와 숫자는 하나 이상!";
        if (/(\w)\1\1/.test(x) == 1 || /(\W)\1\1/.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "동일한 문자열은 사용할 수 없습니다.!";
        if (num_pat.test(x) == 1 || alp_pat.test(x) == 1)
            document.getElementById("ps_check").innerHTML = "연속된 문자열은 사용할 수 없습니다.!";
    }
}
function check_pn() {
    var x = document.getElementById("u_pn").value;
    if (x == "") { document.getElementById("pn_check").innerHTML = "전화번호를 입력해주세요" }
    if (/^01(?:0|1|[6-9])-(?:\d{3}|\d{4})-\d{4}$/.test(x) == 1) { document.getElementById("pn_check").innerHTML = "좋아요!" }
    if (x.length >= 12)
    {
        if (/^01(?:0|1|[6-9])-(?:\d{3}|\d{4})-\d{4}$/.test(x) == 0) { document.getElementById("pn_check").innerHTML = "다시 입력해주세요!" }
    }
}
function check_ad() {
    var x = document.getElementById("u_ad").value;
    if (x[2] == '도')
    {
        if (/^[가-힣]{3}[도 ][가-힣]+([시]|[군])[ ][가-힣]+[구][ ][가-힣]+[로][가-힣0-9 ]*/.test(x) == 1) { document.getElementById("ad_check").innerHTML = "좋아요!" }
        else {
            document.getElementById("ad_check").innerHTML = "유효하지 않습니다.";
        }
    }
    else if (x[2] == '특')
    {
        if (/^[서][울][특][별][시][ ][가-힣]+[구][ ][가-힣]+[로][가-힣0-9 ]*/.test(x) == 1) { document.getElementById("ad_check").innerHTML = "좋아요!" }
        else {
            document.getElementById("ad_check").innerHTML = "유효하지 않습니다.";
        }
    }
    else if (x[2] == '광')
    {
        if (/^[인울부광대][가-힣][광][역][시][ ][가-힣]+[구][ ][가-힣]+[로][가-힣0-9 ]*/.test(x) == 1) { document.getElementById("ad_check").innerHTML = "좋아요!" }
        else {
            document.getElementById("ad_check").innerHTML = "유효하지 않습니다.";
        }
    }
    else {
        document.getElementById("ad_check").innerHTML = "유효하지 않습니다.";
    }
    if(x="")
    {
        document.getElementById("ad_check").innerHTML = "유효하지 않습니다.";
    }
    
}
function check_br()
{
    var year = document.getElementById("user_year").value;
    var month = document.getElementById("user_month").value;
    var day = document.getElementById("user_day").value;

    if (year == "" || month == "" || day == "") { document.getElementById("br_check").innerHTML = "출생년도를 입력해주세요" }
   
    if (year < 1900)
            document.getElementById("br_check").innerHTML = "유효하지 않은 출생년도에요";
   
    else if (year.length > 4)
    {
        document.getElementById("br_check").innerHTML = "유효하지 않은 출생년도에요";
    }
    else
    {
    if (month == "") document.getElementById("br_check").innerHTML = "달을 입력해주세요";
    else if (month < 1 || month > 12) document.getElementById("br_check").innerHTML = "유효하지 않은 달이에요";
    else if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12)
    {
            if (day > 31) document.getElementById("br_check").innerHTML = "유효하지 않은 날짜에요";
            else if (day == "") document.getElementById("br_check").innerHTML = "날짜를 입력해주세요";
            else document.getElementById("br_check").innerHTML = "좋아요!";
    }
    else
    {
        if(month ==2)
        {
            if((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 4))
            {
                if (day > 29) document.getElementById("br_check").innerHTML = "유효하지 않은 날짜에요";
                else if (day == "") document.getElementById("br_check").innerHTML = "날짜를 입력해주세요";
                else document.getElementById("br_check").innerHTML = "좋아요!";
            }
            else
            {
                if (day > 28) document.getElementById("br_check").innerHTML = "2월 29일은 없어요";
                else if (day == "") document.getElementById("br_check").innerHTML = "날짜를 입력해주세요";
                else document.getElementById("br_check").innerHTML = "좋아요!";
            }
        }
        else{
            if (day > 30) document.getElementById("br_check").innerHTML = "유효하지 않은 날짜에요";
            else if (day == "") document.getElementById("br_check").innerHTML = "날짜를 입력해주세요";
            else document.getElementById("br_check").innerHTML = "좋아요!";
        }
    
     }
    }

}
function check_all()
{
    var id = document.getElementById("id_check").innerHTML;
    var ps = document.getElementById("ps_check").innerHTML;
    var pn = document.getElementById("pn_check").innerHTML;
    var br = document.getElementById("br_check").innerHTML;
    var nm = document.getElementById("nm_check").innerHTML;
    var ad = document.getElementById("ad_check").innerHTML;

    if (id == "좋아요!" && ps == "좋아요!" && pn == "좋아요!" && br == "좋아요!" && nm == "좋아요!" && ad == "좋아요!")
    {
        document.getElementById("mysubmit").disabled = false;
    }
}
var httpRequest = null;
function getXMLHttpRequest() {
    if (window.ActiveXObject) {
        try {
            return new ActiveXObject("Msxml2.XMLHTTP");
        } catch (error) {
            try {
                return new ActiveXObject("Microsoft.XMLHTTP");
            } catch (error2) {
                return (null);
            }
        }
    } else if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else {
        return null;
    }
}
function check_text() {
    if (httpRequest.readyState == 4) {
        if (httpRequest.status == 200) {
           alert(httpRequest.responseText);
            if (httpRequest.responseText != "사용 가능한 아이디입니다.") {

                document.getElementById("id_check").innerHTML = "이미 있는 아이디입니다.";
            } else {

                document.getElementById("id_check").innerHTML="좋아요!";
            }
        } else {
            alert("실패하였습니다 : " + httpRequest.status);
        }
    }
}
function sending(url) {
    httpRequest = getXMLHttpRequest();
    httpRequest.onreadystatechange = check_text;
    httpRequest.open("GET", url, true);
    httpRequest.send(null);
}
function check_url() {
    var su = document.signup;
    var id = su.user_id.value;

     {
         var ul = "check_id.php" + "?id=" + id;
        sending(ul);
    }
}
function check_good() {
    var id = document.getElementById("id_check").innerHTML;
    if (id == "중복확인을 해주세요!") {
        document.getElementById("repeat").disabled = false;
    }
    else {
        document.getElementById("repeat").disabled = true;
    }
}
function check_nm() {
    var x = document.getElementById("u_name").value;
    if (x == "") { document.getElementById("nm_check").innerHTML = "이름을 입력해주세요" }
    if (x.length>=2) { document.getElementById("nm_check").innerHTML = "좋아요!" }

}