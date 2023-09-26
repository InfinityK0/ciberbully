
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	line-height: 1.7;
	color: #ffeba7;
	background-color: #1f2029;
  overflow: hidden;
  height: 100vh;
  background: radial-gradient(ellipse at bottom, #1B2735 0%, #12141d 100%);
}
a:hover {
	text-decoration: none;
}
.link {
  color: #ffeba7;
}
.link:hover {
  color: #c4c3ca;
}
p {
  font-weight: 500;
  font-size: 14px;
}
h4 {
  font-weight: 600;
}
h6 span{
  padding: 0 20px;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
display: none;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: #ffeba7;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #ffeba7;
  background-color: #020305;
  font-family: 'unicons';
  content: '\eb4f';
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 24px;
  transition: all 0.5s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}
.card-3d-wrap {
  position: relative;
  width: 440px;
  max-width: 100%;
  height: 400px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 800px;
  margin-top: 60px;
}
.card-3d-wrapper {
  width: 100%;
  height: 100%;
  position:absolute;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 100%;
  background-color: #2b2e38;
  background-image: url('/img/pattern_japanese-pattern-2_1_2_0-0_0_1__ffffff00_000000.png');
  position: absolute;
  border-radius: 6px;
  -webkit-transform-style: preserve-3d;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 35px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
}
.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
}
.form-style {
  padding: 13px 20px;
  padding-left: 55px;
  height: 48px;
  width: 100%;
  font-weight: 500;
  border-radius: 4px;
  font-size: 14px;
  line-height: 22px;
  letter-spacing: 0.5px;
  outline: none;
  color: #c4c3ca;
  background-color: #1f2029;
  border: none;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.input-icon {
  position: absolute;
  top: 0;
  left: 18px;
  height: 48px;
  font-size: 24px;
  line-height: 48px;
  text-align: left;
  -webkit-transition: all 200ms linear;
   transition: all 200ms linear;
}
.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  align-items: center;
  background-color: #ffeba7;
  color: #000000;
}
.btn:hover{  
  background-color: #000000;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 174px 187px #FFF , 749px 1972px #ffffff , 1996px 1113px #FFF , 126px 42px #FFF , 816px 200px #FFF , 47px 1229px #FFF , 750px 902px #FFF , 1884px 1799px #FFF , 460px 1597px #FFF , 1215px 1884px #FFF , 1986px 1726px #FFF , 565px 823px #FFF , 699px 1940px #FFF , 32px 1091px #FFF , 1559px 572px #FFF , 1232px 815px #FFF , 1060px 682px #FFF , 1551px 531px #FFF , 301px 976px #FFF , 889px 1344px #FFF , 410px 765px #FFF , 1691px 231px #FFF , 552px 82px #FFF , 1849px 864px #FFF , 236px 1881px #FFF , 767px 1613px #FFF , 1825px 1616px #FFF , 440px 930px #FFF , 1921px 1397px #FFF , 409px 892px #FFF , 1403px 128px #FFF , 1617px 1549px #FFF , 271px 1332px #FFF , 5px 1884px #FFF , 1371px 634px #FFF , 382px 609px #FFF , 1022px 1200px #FFF , 601px 836px #FFF , 811px 1240px #FFF , 1266px 713px #FFF , 1514px 1237px #FFF , 318px 751px #FFF , 662px 1315px #FFF , 1592px 1170px #FFF , 112px 290px #FFF , 1885px 1104px #FFF , 1247px 1511px #FFF , 1803px 1126px #FFF , 710px 527px #FFF , 1480px 908px #FFF , 1386px 74px #FFF , 1414px 1279px #FFF , 289px 1430px #FFF , 258px 1933px #FFF , 1648px 665px #FFF , 444px 201px #FFF , 1102px 1939px #FFF , 619px 835px #FFF , 810px 1704px #FFF , 381px 1922px #FFF , 1229px 1335px #FFF , 1448px 637px #FFF , 680px 455px #FFF , 96px 1142px #FFF , 449px 960px #FFF , 274px 1974px #FFF , 24px 1044px #FFF , 1449px 1743px #FFF , 537px 1874px #FFF , 282px 272px #FFF , 1090px 1557px #FFF , 1738px 680px #FFF , 1221px 731px #FFF , 1620px 1212px #FFF , 481px 466px #FFF , 269px 611px #FFF , 939px 1392px #FFF , 1275px 1667px #FFF , 163px 694px #FFF , 1897px 27px #FFF , 1991px 661px #FFF , 988px 762px #FFF , 961px 1686px #FFF , 333px 1172px #FFF , 1735px 229px #FFF , 1322px 331px #FFF , 362px 771px #FFF , 287px 36px #FFF , 1985px 1283px #FFF , 1833px 162px #FFF , 416px 1610px #FFF , 991px 16px #FFF , 1762px 424px #FFF , 1669px 36px #FFF , 1500px 598px #FFF , 1108px 672px #FFF , 992px 447px #FFF , 879px 107px #FFF , 1500px 756px #FFF , 832px 1440px #FFF , 1580px 1248px #FFF , 231px 660px #FFF , 799px 392px #FFF , 1220px 1337px #FFF , 892px 204px #FFF , 574px 1343px #FFF , 312px 728px #FFF , 1067px 721px #FFF , 735px 1612px #FFF , 20px 1114px #FFF , 454px 1957px #FFF , 1099px 1905px #FFF , 1442px 1051px #FFF , 477px 150px #FFF , 1838px 341px #FFF , 587px 1068px #FFF , 743px 607px #FFF , 1803px 1706px #FFF , 247px 114px #FFF , 1498px 1426px #FFF , 831px 1615px #FFF , 158px 1183px #FFF , 408px 1503px #FFF , 790px 1545px #FFF , 543px 906px #FFF , 793px 1384px #FFF , 1030px 408px #FFF , 1706px 802px #FFF , 622px 275px #FFF , 277px 922px #FFF , 534px 496px #FFF , 533px 44px #FFF , 1662px 1877px #FFF , 1055px 1401px #FFF , 256px 611px #FFF , 548px 1978px #FFF , 348px 48px #FFF , 1809px 1016px #FFF , 550px 846px #FFF , 945px 1301px #FFF , 113px 1305px #FFF , 907px 1660px #FFF , 729px 587px #FFF , 1979px 1343px #FFF , 1360px 61px #FFF , 265px 1229px #FFF , 1967px 1781px #FFF , 278px 1895px #FFF , 1636px 701px #FFF , 1373px 1390px #FFF , 1874px 391px #FFF , 1326px 1972px #FFF , 1001px 1169px #FFF , 1478px 193px #FFF , 202px 447px #FFF , 1963px 1563px #FFF , 1215px 159px #FFF , 21px 669px #FFF , 1518px 789px #FFF , 1866px 460px #FFF , 948px 195px #FFF , 244px 1484px #FFF , 768px 1235px #FFF , 1846px 1180px #FFF , 973px 822px #FFF , 1994px 39px #FFF , 1788px 1773px #FFF , 692px 599px #FFF , 1751px 1868px #FFF , 161px 1885px #FFF , 1776px 1781px #FFF , 1801px 1320px #FFF , 550px 643px #FFF , 343px 613px #FFF , 1387px 498px #FFF , 1738px 715px #FFF , 724px 544px #FFF , 1367px 1431px #FFF , 1506px 1827px #FFF , 1410px 525px #FFF , 793px 1053px #FFF , 1211px 259px #FFF , 478px 297px #FFF , 1855px 1144px #FFF , 399px 132px #FFF , 1647px 459px #FFF , 571px 277px #FFF , 1461px 1128px #FFF , 158px 1034px #FFF , 527px 701px #FFF , 1122px 882px #FFF , 894px 1836px #FFF , 182px 29px #FFF , 617px 275px #FFF , 494px 1482px #FFF , 98px 1654px #FFF , 884px 703px #FFF , 573px 1307px #FFF , 1539px 1946px #FFF , 1860px 315px #FFF , 1243px 373px #FFF , 1217px 981px #FFF , 679px 67px #FFF , 206px 495px #FFF , 1716px 1077px #FFF , 1491px 1359px #FFF , 169px 493px #FFF , 891px 268px #FFF , 1598px 522px #FFF , 389px 1295px #FFF , 1497px 1760px #FFF , 1219px 1579px #FFF , 1571px 814px #FFF , 1844px 262px #FFF , 1030px 1837px #FFF , 1636px 862px #FFF , 1655px 1850px #FFF , 33px 1232px #FFF , 1176px 454px #FFF , 1723px 1204px #FFF , 921px 1579px #FFF , 30px 953px #FFF , 1999px 941px #FFF , 242px 1961px #FFF , 812px 1264px #FFF , 1648px 5px #FFF , 932px 630px #FFF , 1904px 1113px #FFF , 883px 689px #FFF , 187px 1647px #FFF , 1px 1215px #FFF , 503px 276px #FFF , 1559px 175px #FFF , 1040px 1828px #FFF , 106px 941px #FFF , 1135px 633px #FFF , 1257px 1476px #FFF , 149px 413px #FFF , 48px 200px #FFF , 1437px 81px #FFF , 544px 1202px #FFF , 210px 1521px #FFF , 918px 1566px #FFF , 879px 1617px #FFF , 458px 368px #FFF , 532px 1719px #FFF , 1624px 726px #FFF , 1843px 915px #FFF , 538px 1172px #FFF , 830px 230px #FFF , 1927px 1563px #FFF , 947px 494px #FFF , 290px 1375px #FFF , 1660px 85px #FFF , 1022px 1155px #FFF , 630px 108px #FFF , 1519px 748px #FFF , 95px 837px #FFF , 527px 1931px #FFF , 996px 1385px #FFF , 1152px 1141px #FFF , 1611px 926px #FFF , 1706px 438px #FFF , 627px 905px #FFF , 1684px 115px #FFF , 1853px 1327px #FFF , 24px 1911px #FFF , 1947px 826px #FFF , 1857px 1821px #FFF , 1870px 1551px #FFF , 676px 945px #FFF , 334px 731px #FFF , 1553px 581px #FFF , 1993px 1268px #FFF , 701px 247px #FFF , 1689px 349px #FFF , 204px 790px #FFF , 721px 1059px #FFF , 944px 1243px #FFF , 626px 1305px #FFF , 1500px 1908px #FFF , 1803px 1210px #FFF , 1073px 1431px #FFF , 971px 1772px #FFF , 337px 1106px #FFF , 1320px 508px #FFF , 320px 458px #FFF , 503px 227px #FFF , 246px 79px #FFF , 1472px 2px #FFF , 980px 1134px #FFF , 1540px 1958px #FFF , 1336px 260px #FFF , 276px 156px #FFF , 778px 1412px #FFF , 318px 669px #FFF , 165px 276px #FFF , 1843px 243px #FFF , 44px 1869px #FFF , 172px 829px #FFF , 744px 909px #FFF , 833px 226px #FFF , 1280px 321px #FFF , 1025px 1267px #FFF , 392px 1066px #FFF , 1789px 593px #FFF , 228px 840px #FFF , 252px 715px #FFF , 309px 1621px #FFF , 1329px 1664px #FFF , 676px 1762px #FFF , 177px 410px #FFF , 613px 825px #FFF , 1806px 1661px #FFF , 827px 186px #FFF , 500px 1924px #FFF , 526px 443px #FFF , 799px 35px #FFF , 182px 1589px #FFF , 1930px 1878px #FFF , 1103px 917px #FFF , 1475px 337px #FFF , 1305px 1072px #FFF , 1847px 1387px #FFF , 1865px 149px #FFF , 210px 651px #FFF , 282px 206px #FFF , 152px 278px #FFF , 1880px 690px #FFF , 1033px 1451px #FFF , 1260px 1728px #FFF , 1832px 225px #FFF , 419px 587px #FFF , 322px 1482px #FFF , 550px 1344px #FFF , 1357px 1699px #FFF , 1125px 1108px #FFF , 1605px 1315px #FFF , 1280px 200px #FFF , 1143px 1022px #FFF , 226px 1335px #FFF , 1116px 1121px #FFF , 1255px 244px #FFF , 212px 1293px #FFF , 1450px 1622px #FFF , 178px 1087px #FFF , 876px 1308px #FFF , 458px 713px #FFF , 1386px 305px #FFF , 685px 1948px #FFF , 392px 294px #FFF , 1265px 965px #FFF , 494px 742px #FFF , 80px 562px #FFF , 601px 1530px #FFF , 1239px 434px #FFF , 1192px 650px #FFF , 1806px 538px #FFF , 1646px 577px #FFF , 1328px 1562px #FFF , 1353px 1686px #FFF , 612px 895px #FFF , 594px 1489px #FFF , 1481px 1019px #FFF , 154px 323px #FFF , 1212px 820px #FFF , 1095px 1496px #FFF , 1952px 1029px #FFF , 1694px 376px #FFF , 493px 1742px #FFF , 448px 1962px #FFF , 1138px 1710px #FFF , 1885px 718px #FFF , 404px 779px #FFF , 394px 1065px #FFF , 1767px 752px #FFF , 1835px 140px #FFF , 1176px 1265px #FFF , 1611px 1256px #FFF , 121px 1157px #FFF , 1565px 1613px #FFF , 579px 1738px #FFF , 1744px 359px #FFF , 934px 1068px #FFF , 1518px 302px #FFF , 614px 1057px #FFF , 1346px 1591px #FFF , 1256px 1982px #FFF , 998px 1534px #FFF , 651px 573px #FFF , 303px 1109px #FFF , 1477px 1003px #FFF , 598px 631px #FFF , 383px 1154px #FFF , 550px 322px #FFF , 202px 1437px #FFF , 1024px 1667px #FFF , 1506px 1977px #FFF , 465px 1302px #FFF , 510px 1131px #FFF , 1356px 1328px #FFF , 1312px 1262px #FFF , 345px 1567px #FFF , 373px 1238px #FFF , 1416px 1625px #FFF , 1113px 249px #FFF , 1531px 1288px #FFF , 828px 794px #FFF , 256px 426px #FFF , 869px 1321px #FFF , 1063px 1181px #FFF , 631px 635px #FFF , 139px 909px #FFF , 305px 1160px #FFF , 843px 477px #FFF , 1666px 277px #FFF , 740px 1019px #FFF , 264px 647px #FFF , 1459px 1055px #FFF , 976px 919px #FFF , 1728px 1147px #FFF , 1426px 1559px #FFF , 444px 525px #FFF , 1657px 1940px #FFF , 250px 1287px #FFF , 1596px 1399px #FFF , 555px 213px #FFF , 1952px 647px #FFF , 1371px 1635px #FFF , 803px 1622px #FFF , 1460px 534px #FFF , 1813px 984px #FFF , 1122px 1977px #FFF , 403px 884px #FFF , 1098px 896px #FFF , 1124px 1318px #FFF , 372px 1710px #FFF , 1308px 1233px #FFF , 1138px 1158px #FFF , 416px 1174px #FFF , 431px 1114px #FFF , 210px 1074px #FFF , 1111px 563px #FFF , 31px 1472px #FFF , 1629px 1311px #FFF , 677px 1022px #FFF , 232px 747px #FFF , 1753px 868px #FFF , 35px 1207px #FFF , 203px 1631px #FFF , 1977px 468px #FFF , 1261px 1036px #FFF , 322px 669px #FFF , 1710px 1340px #FFF , 1230px 463px #FFF , 1727px 1826px #FFF , 938px 1553px #FFF , 1562px 1690px #FFF , 78px 424px #FFF , 1927px 1980px #FFF , 1632px 1312px #FFF , 1352px 1325px #FFF , 66px 34px #FFF , 535px 138px #FFF , 152px 1324px #FFF , 1816px 580px #FFF , 1180px 756px #FFF , 1701px 1902px #FFF , 199px 1993px #FFF , 70px 1926px #FFF , 1342px 1276px #FFF , 23px 1926px #FFF , 1403px 172px #FFF , 88px 1368px #FFF , 1437px 1816px #FFF , 530px 845px #FFF , 845px 37px #FFF , 871px 1642px #FFF , 1357px 286px #FFF , 1690px 1192px #FFF , 266px 468px #FFF , 1826px 427px #FFF , 1256px 262px #FFF , 1053px 99px #FFF , 384px 106px #FFF , 32px 50px #FFF , 1083px 14px #FFF , 19px 1667px #FFF , 97px 1887px #FFF , 1356px 1699px #FFF , 1487px 1050px #FFF , 900px 1052px #FFF , 807px 1741px #FFF , 517px 360px #FFF , 332px 404px #FFF , 1253px 961px #FFF , 43px 558px #FFF , 1535px 371px #FFF , 448px 243px #FFF , 1560px 925px #FFF , 326px 745px #FFF , 956px 1182px #FFF , 1171px 1387px #FFF , 220px 1364px #FFF , 162px 1747px #FFF , 1116px 47px #FFF , 1507px 1228px #FFF , 912px 328px #FFF , 18px 345px #FFF , 863px 725px #FFF , 1373px 338px #FFF , 174px 76px #FFF , 42px 1740px #FFF , 1550px 304px #FFF , 1773px 1595px #FFF , 1285px 778px #FFF , 1734px 1881px #FFF , 1433px 1736px #FFF , 1449px 1573px #FFF , 1484px 784px #FFF , 384px 1716px #FFF , 1178px 808px #FFF , 474px 1387px #FFF , 942px 999px #FFF , 405px 1907px #FFF , 2px 1421px #FFF , 70px 59px #FFF , 391px 957px #FFF , 813px 1369px #FFF , 453px 1648px #FFF , 666px 1870px #FFF , 837px 211px #FFF , 9px 699px #FFF , 468px 862px #FFF , 1772px 963px #FFF , 1598px 663px #FFF , 220px 1204px #FFF , 51px 1405px #FFF , 1188px 1429px #FFF , 865px 1178px #FFF , 602px 33px #FFF , 440px 1498px #FFF , 428px 921px #FFF , 1756px 316px #FFF , 1886px 1965px #FFF , 1099px 782px #FFF , 1250px 140px #FFF , 542px 1471px #FFF , 81px 427px #FFF , 507px 1112px #FFF , 1034px 1273px #FFF , 1857px 1608px #FFF , 1873px 849px #FFF , 1194px 880px #FFF , 1385px 1948px #FFF , 1339px 571px #FFF , 1318px 1213px #FFF , 1999px 1461px #FFF , 446px 1347px #FFF , 730px 914px #FFF , 416px 670px #FFF , 665px 1298px #FFF , 621px 528px #FFF , 578px 1792px #FFF , 1972px 1433px #FFF , 677px 1908px #FFF , 806px 1953px #FFF , 1203px 1592px #FFF , 1138px 1362px #FFF , 1253px 153px #FFF , 1512px 1326px #FFF , 1726px 1015px #FFF , 685px 141px #FFF , 1031px 883px #FFF , 1269px 1272px #FFF , 1908px 1728px #FFF , 1433px 378px #FFF , 703px 207px #FFF , 350px 935px #FFF , 1475px 1326px #FFF , 1114px 1504px #FFF , 450px 941px #FFF , 1950px 1825px #FFF , 1507px 1113px #FFF , 931px 296px #FFF , 271px 1172px #FFF , 823px 531px #FFF , 1883px 279px #FFF , 80px 1834px #FFF , 242px 137px #FFF , 275px 1087px #FFF , 1375px 1319px #FFF , 820px 1176px #FFF , 912px 26px #FFF , 572px 79px #FFF , 303px 655px #FFF , 1849px 1435px #FFF , 702px 684px #FFF , 987px 1945px #FFF , 1934px 1667px #FFF , 267px 1753px #FFF , 216px 606px #FFF , 515px 1412px #FFF , 1598px 1181px #FFF , 897px 1853px #FFF , 1083px 121px #FFF , 413px 642px #FFF , 1819px 253px #FFF , 765px 556px #FFF , 525px 645px #FFF , 1748px 1135px #FFF , 1580px 1977px #FFF , 1580px 223px #FFF , 515px 134px #FFF , 116px 240px #FFF , 1629px 1470px #FFF , 1105px 1259px #FFF , 786px 1334px #FFF , 1908px 204px #FFF , 1519px 603px #FFF , 666px 1991px #FFF , 1208px 1483px #FFF , 73px 529px #FFF , 1246px 1602px #FFF , 1318px 118px #FFF , 1360px 937px #FFF , 1631px 1032px #FFF , 519px 765px #FFF , 916px 431px #FFF , 1931px 31px #FFF , 894px 224px #FFF , 1426px 316px #FFF , 1339px 1550px #FFF , 76px 1274px #FFF , 638px 1452px #FFF , 353px 1758px #FFF , 766px 1490px #FFF , 1410px 207px #FFF , 1560px 997px #FFF , 451px 766px #FFF , 1229px 1551px #FFF , 1135px 271px #FFF , 1879px 1980px #FFF , 467px 1434px #FFF , 1093px 911px #FFF , 1682px 396px #FFF , 824px 1910px #FFF , 465px 167px #FFF , 1324px 506px #FFF , 1731px 789px #FFF , 1092px 172px #FFF , 749px 983px #FFF , 1545px 284px #FFF , 1663px 1248px #FFF , 1575px 11px #FFF , 1691px 481px #FFF , 58px 1401px #FFF , 1677px 523px #FFF , 1068px 117px #FFF , 1045px 1694px #FFF , 1204px 117px #FFF , 1232px 272px #FFF , 599px 893px #FFF , 1655px 1178px #FFF , 270px 1912px #FFF , 599px 1774px #FFF , 16px 999px #FFF , 752px 106px #FFF , 1534px 219px #FFF , 1801px 1109px #FFF , 1178px 184px #FFF , 67px 243px #FFF , 1641px 221px #FFF , 1555px 1523px #FFF , 689px 1878px #FFF , 540px 1806px #FFF , 1888px 1799px #FFF , 691px 772px #FFF , 1217px 1399px #FFF , 936px 1856px #FFF , 909px 1831px #FFF , 1067px 982px #FFF , 1669px 318px #FFF , 526px 655px #FFF , 1415px 1580px #FFF , 370px 1959px #FFF , 1736px 1655px #FFF , 606px 1857px #FFF , 1313px 1005px #FFF , 544px 95px #FFF , 1215px 1591px #FFF , 865px 269px #FFF , 630px 1265px #FFF , 166px 523px #FFF , 296px 69px #FFF , 1291px 1400px #FFF , 515px 1464px #FFF , 1430px 315px #FFF , 721px 1265px #FFF , 383px 796px #FFF;
  animation: animStar 50s linear infinite; }
  #stars:after {
    content: " ";
    position: absolute;

    width: 1px;
    height: 1px;
    background: transparent;
    box-shadow: 174px 187px #FFF , 749px 1972px #FFF , 1996px 1113px #FFF , 126px 42px #FFF , 816px 200px #FFF , 47px 1229px #FFF , 750px 902px #FFF , 1884px 1799px #FFF , 460px 1597px #FFF , 1215px 1884px #FFF , 1986px 1726px #FFF , 565px 823px #FFF , 699px 1940px #FFF , 32px 1091px #FFF , 1559px 572px #FFF , 1232px 815px #FFF , 1060px 682px #FFF , 1551px 531px #FFF , 301px 976px #FFF , 889px 1344px #FFF , 410px 765px #FFF , 1691px 231px #FFF , 552px 82px #FFF , 1849px 864px #FFF , 236px 1881px #FFF , 767px 1613px #FFF , 1825px 1616px #FFF , 440px 930px #FFF , 1921px 1397px #FFF , 409px 892px #FFF , 1403px 128px #FFF , 1617px 1549px #FFF , 271px 1332px #FFF , 5px 1884px #FFF , 1371px 634px #FFF , 382px 609px #FFF , 1022px 1200px #FFF , 601px 836px #FFF , 811px 1240px #FFF , 1266px 713px #FFF , 1514px 1237px #FFF , 318px 751px #FFF , 662px 1315px #FFF , 1592px 1170px #FFF , 112px 290px #FFF , 1885px 1104px #FFF , 1247px 1511px #FFF , 1803px 1126px #FFF , 710px 527px #FFF , 1480px 908px #FFF , 1386px 74px #FFF , 1414px 1279px #FFF , 289px 1430px #FFF , 258px 1933px #FFF , 1648px 665px #FFF , 444px 201px #FFF , 1102px 1939px #FFF , 619px 835px #FFF , 810px 1704px #FFF , 381px 1922px #FFF , 1229px 1335px #FFF , 1448px 637px #FFF , 680px 455px #FFF , 96px 1142px #FFF , 449px 960px #FFF , 274px 1974px #FFF , 24px 1044px #FFF , 1449px 1743px #FFF , 537px 1874px #FFF , 282px 272px #FFF , 1090px 1557px #FFF , 1738px 680px #FFF , 1221px 731px #FFF , 1620px 1212px #FFF , 481px 466px #FFF , 269px 611px #FFF , 939px 1392px #FFF , 1275px 1667px #FFF , 163px 694px #FFF , 1897px 27px #FFF , 1991px 661px #FFF , 988px 762px #FFF , 961px 1686px #FFF , 333px 1172px #FFF , 1735px 229px #FFF , 1322px 331px #FFF , 362px 771px #FFF , 287px 36px #FFF , 1985px 1283px #FFF , 1833px 162px #FFF , 416px 1610px #FFF , 991px 16px #FFF , 1762px 424px #FFF , 1669px 36px #FFF , 1500px 598px #FFF , 1108px 672px #FFF , 992px 447px #FFF , 879px 107px #FFF , 1500px 756px #FFF , 832px 1440px #FFF , 1580px 1248px #FFF , 231px 660px #FFF , 799px 392px #FFF , 1220px 1337px #FFF , 892px 204px #FFF , 574px 1343px #FFF , 312px 728px #FFF , 1067px 721px #FFF , 735px 1612px #FFF , 20px 1114px #FFF , 454px 1957px #FFF , 1099px 1905px #FFF , 1442px 1051px #FFF , 477px 150px #FFF , 1838px 341px #FFF , 587px 1068px #FFF , 743px 607px #FFF , 1803px 1706px #FFF , 247px 114px #FFF , 1498px 1426px #FFF , 831px 1615px #FFF , 158px 1183px #FFF , 408px 1503px #FFF , 790px 1545px #FFF , 543px 906px #FFF , 793px 1384px #FFF , 1030px 408px #FFF , 1706px 802px #FFF , 622px 275px #FFF , 277px 922px #FFF , 534px 496px #FFF , 533px 44px #FFF , 1662px 1877px #FFF , 1055px 1401px #FFF , 256px 611px #FFF , 548px 1978px #FFF , 348px 48px #FFF , 1809px 1016px #FFF , 550px 846px #FFF , 945px 1301px #FFF , 113px 1305px #FFF , 907px 1660px #FFF , 729px 587px #FFF , 1979px 1343px #FFF , 1360px 61px #FFF , 265px 1229px #FFF , 1967px 1781px #FFF , 278px 1895px #FFF , 1636px 701px #FFF , 1373px 1390px #FFF , 1874px 391px #FFF , 1326px 1972px #FFF , 1001px 1169px #FFF , 1478px 193px #FFF , 202px 447px #FFF , 1963px 1563px #FFF , 1215px 159px #FFF , 21px 669px #FFF , 1518px 789px #FFF , 1866px 460px #FFF , 948px 195px #FFF , 244px 1484px #FFF , 768px 1235px #FFF , 1846px 1180px #FFF , 973px 822px #FFF , 1994px 39px #FFF , 1788px 1773px #FFF , 692px 599px #FFF , 1751px 1868px #FFF , 161px 1885px #FFF , 1776px 1781px #FFF , 1801px 1320px #FFF , 550px 643px #FFF , 343px 613px #FFF , 1387px 498px #FFF , 1738px 715px #FFF , 724px 544px #FFF , 1367px 1431px #FFF , 1506px 1827px #FFF , 1410px 525px #FFF , 793px 1053px #FFF , 1211px 259px #FFF , 478px 297px #FFF , 1855px 1144px #FFF , 399px 132px #FFF , 1647px 459px #FFF , 571px 277px #FFF , 1461px 1128px #FFF , 158px 1034px #FFF , 527px 701px #FFF , 1122px 882px #FFF , 894px 1836px #FFF , 182px 29px #FFF , 617px 275px #FFF , 494px 1482px #FFF , 98px 1654px #FFF , 884px 703px #FFF , 573px 1307px #FFF , 1539px 1946px #FFF , 1860px 315px #FFF , 1243px 373px #FFF , 1217px 981px #FFF , 679px 67px #FFF , 206px 495px #FFF , 1716px 1077px #FFF , 1491px 1359px #FFF , 169px 493px #FFF , 891px 268px #FFF , 1598px 522px #FFF , 389px 1295px #FFF , 1497px 1760px #FFF , 1219px 1579px #FFF , 1571px 814px #FFF , 1844px 262px #FFF , 1030px 1837px #FFF , 1636px 862px #FFF , 1655px 1850px #FFF , 33px 1232px #FFF , 1176px 454px #FFF , 1723px 1204px #FFF , 921px 1579px #FFF , 30px 953px #FFF , 1999px 941px #FFF , 242px 1961px #FFF , 812px 1264px #FFF , 1648px 5px #FFF , 932px 630px #FFF , 1904px 1113px #FFF , 883px 689px #FFF , 187px 1647px #FFF , 1px 1215px #FFF , 503px 276px #FFF , 1559px 175px #FFF , 1040px 1828px #FFF , 106px 941px #FFF , 1135px 633px #FFF , 1257px 1476px #FFF , 149px 413px #FFF , 48px 200px #FFF , 1437px 81px #FFF , 544px 1202px #FFF , 210px 1521px #FFF , 918px 1566px #FFF , 879px 1617px #FFF , 458px 368px #FFF , 532px 1719px #FFF , 1624px 726px #FFF , 1843px 915px #FFF , 538px 1172px #FFF , 830px 230px #FFF , 1927px 1563px #FFF , 947px 494px #FFF , 290px 1375px #FFF , 1660px 85px #FFF , 1022px 1155px #FFF , 630px 108px #FFF , 1519px 748px #FFF , 95px 837px #FFF , 527px 1931px #FFF , 996px 1385px #FFF , 1152px 1141px #FFF , 1611px 926px #FFF , 1706px 438px #FFF , 627px 905px #FFF , 1684px 115px #FFF , 1853px 1327px #FFF , 24px 1911px #FFF , 1947px 826px #FFF , 1857px 1821px #FFF , 1870px 1551px #FFF , 676px 945px #FFF , 334px 731px #FFF , 1553px 581px #FFF , 1993px 1268px #FFF , 701px 247px #FFF , 1689px 349px #FFF , 204px 790px #FFF , 721px 1059px #FFF , 944px 1243px #FFF , 626px 1305px #FFF , 1500px 1908px #FFF , 1803px 1210px #FFF , 1073px 1431px #FFF , 971px 1772px #FFF , 337px 1106px #FFF , 1320px 508px #FFF , 320px 458px #FFF , 503px 227px #FFF , 246px 79px #FFF , 1472px 2px #FFF , 980px 1134px #FFF , 1540px 1958px #FFF , 1336px 260px #FFF , 276px 156px #FFF , 778px 1412px #FFF , 318px 669px #FFF , 165px 276px #FFF , 1843px 243px #FFF , 44px 1869px #FFF , 172px 829px #FFF , 744px 909px #FFF , 833px 226px #FFF , 1280px 321px #FFF , 1025px 1267px #FFF , 392px 1066px #FFF , 1789px 593px #FFF , 228px 840px #FFF , 252px 715px #FFF , 309px 1621px #FFF , 1329px 1664px #FFF , 676px 1762px #FFF , 177px 410px #FFF , 613px 825px #FFF , 1806px 1661px #FFF , 827px 186px #FFF , 500px 1924px #FFF , 526px 443px #FFF , 799px 35px #FFF , 182px 1589px #FFF , 1930px 1878px #FFF , 1103px 917px #FFF , 1475px 337px #FFF , 1305px 1072px #FFF , 1847px 1387px #FFF , 1865px 149px #FFF , 210px 651px #FFF , 282px 206px #FFF , 152px 278px #FFF , 1880px 690px #FFF , 1033px 1451px #FFF , 1260px 1728px #FFF , 1832px 225px #FFF , 419px 587px #FFF , 322px 1482px #FFF , 550px 1344px #FFF , 1357px 1699px #FFF , 1125px 1108px #FFF , 1605px 1315px #FFF , 1280px 200px #FFF , 1143px 1022px #FFF , 226px 1335px #FFF , 1116px 1121px #FFF , 1255px 244px #FFF , 212px 1293px #FFF , 1450px 1622px #FFF , 178px 1087px #FFF , 876px 1308px #FFF , 458px 713px #FFF , 1386px 305px #FFF , 685px 1948px #FFF , 392px 294px #FFF , 1265px 965px #FFF , 494px 742px #FFF , 80px 562px #FFF , 601px 1530px #FFF , 1239px 434px #FFF , 1192px 650px #FFF , 1806px 538px #FFF , 1646px 577px #FFF , 1328px 1562px #FFF , 1353px 1686px #FFF , 612px 895px #FFF , 594px 1489px #FFF , 1481px 1019px #FFF , 154px 323px #FFF , 1212px 820px #FFF , 1095px 1496px #FFF , 1952px 1029px #FFF , 1694px 376px #FFF , 493px 1742px #FFF , 448px 1962px #FFF , 1138px 1710px #FFF , 1885px 718px #FFF , 404px 779px #FFF , 394px 1065px #FFF , 1767px 752px #FFF , 1835px 140px #FFF , 1176px 1265px #FFF , 1611px 1256px #FFF , 121px 1157px #FFF , 1565px 1613px #FFF , 579px 1738px #FFF , 1744px 359px #FFF , 934px 1068px #FFF , 1518px 302px #FFF , 614px 1057px #FFF , 1346px 1591px #FFF , 1256px 1982px #FFF , 998px 1534px #FFF , 651px 573px #FFF , 303px 1109px #FFF , 1477px 1003px #FFF , 598px 631px #FFF , 383px 1154px #FFF , 550px 322px #FFF , 202px 1437px #FFF , 1024px 1667px #FFF , 1506px 1977px #FFF , 465px 1302px #FFF , 510px 1131px #FFF , 1356px 1328px #FFF , 1312px 1262px #FFF , 345px 1567px #FFF , 373px 1238px #FFF , 1416px 1625px #FFF , 1113px 249px #FFF , 1531px 1288px #FFF , 828px 794px #FFF , 256px 426px #FFF , 869px 1321px #FFF , 1063px 1181px #FFF , 631px 635px #FFF , 139px 909px #FFF , 305px 1160px #FFF , 843px 477px #FFF , 1666px 277px #FFF , 740px 1019px #FFF , 264px 647px #FFF , 1459px 1055px #FFF , 976px 919px #FFF , 1728px 1147px #FFF , 1426px 1559px #FFF , 444px 525px #FFF , 1657px 1940px #FFF , 250px 1287px #FFF , 1596px 1399px #FFF , 555px 213px #FFF , 1952px 647px #FFF , 1371px 1635px #FFF , 803px 1622px #FFF , 1460px 534px #FFF , 1813px 984px #FFF , 1122px 1977px #FFF , 403px 884px #FFF , 1098px 896px #FFF , 1124px 1318px #FFF , 372px 1710px #FFF , 1308px 1233px #FFF , 1138px 1158px #FFF , 416px 1174px #FFF , 431px 1114px #FFF , 210px 1074px #FFF , 1111px 563px #FFF , 31px 1472px #FFF , 1629px 1311px #FFF , 677px 1022px #FFF , 232px 747px #FFF , 1753px 868px #FFF , 35px 1207px #FFF , 203px 1631px #FFF , 1977px 468px #FFF , 1261px 1036px #FFF , 322px 669px #FFF , 1710px 1340px #FFF , 1230px 463px #FFF , 1727px 1826px #FFF , 938px 1553px #FFF , 1562px 1690px #FFF , 78px 424px #FFF , 1927px 1980px #FFF , 1632px 1312px #FFF , 1352px 1325px #FFF , 66px 34px #FFF , 535px 138px #FFF , 152px 1324px #FFF , 1816px 580px #FFF , 1180px 756px #FFF , 1701px 1902px #FFF , 199px 1993px #FFF , 70px 1926px #FFF , 1342px 1276px #FFF , 23px 1926px #FFF , 1403px 172px #FFF , 88px 1368px #FFF , 1437px 1816px #FFF , 530px 845px #FFF , 845px 37px #FFF , 871px 1642px #FFF , 1357px 286px #FFF , 1690px 1192px #FFF , 266px 468px #FFF , 1826px 427px #FFF , 1256px 262px #FFF , 1053px 99px #FFF , 384px 106px #FFF , 32px 50px #FFF , 1083px 14px #FFF , 19px 1667px #FFF , 97px 1887px #FFF , 1356px 1699px #FFF , 1487px 1050px #FFF , 900px 1052px #FFF , 807px 1741px #FFF , 517px 360px #FFF , 332px 404px #FFF , 1253px 961px #FFF , 43px 558px #FFF , 1535px 371px #FFF , 448px 243px #FFF , 1560px 925px #FFF , 326px 745px #FFF , 956px 1182px #FFF , 1171px 1387px #FFF , 220px 1364px #FFF , 162px 1747px #FFF , 1116px 47px #FFF , 1507px 1228px #FFF , 912px 328px #FFF , 18px 345px #FFF , 863px 725px #FFF , 1373px 338px #FFF , 174px 76px #FFF , 42px 1740px #FFF , 1550px 304px #FFF , 1773px 1595px #FFF , 1285px 778px #FFF , 1734px 1881px #FFF , 1433px 1736px #FFF , 1449px 1573px #FFF , 1484px 784px #FFF , 384px 1716px #FFF , 1178px 808px #FFF , 474px 1387px #FFF , 942px 999px #FFF , 405px 1907px #FFF , 2px 1421px #FFF , 70px 59px #FFF , 391px 957px #FFF , 813px 1369px #FFF , 453px 1648px #FFF , 666px 1870px #FFF , 837px 211px #FFF , 9px 699px #FFF , 468px 862px #FFF , 1772px 963px #FFF , 1598px 663px #FFF , 220px 1204px #FFF , 51px 1405px #FFF , 1188px 1429px #FFF , 865px 1178px #FFF , 602px 33px #FFF , 440px 1498px #FFF , 428px 921px #FFF , 1756px 316px #FFF , 1886px 1965px #FFF , 1099px 782px #FFF , 1250px 140px #FFF , 542px 1471px #FFF , 81px 427px #FFF , 507px 1112px #FFF , 1034px 1273px #FFF , 1857px 1608px #FFF , 1873px 849px #FFF , 1194px 880px #FFF , 1385px 1948px #FFF , 1339px 571px #FFF , 1318px 1213px #FFF , 1999px 1461px #FFF , 446px 1347px #FFF , 730px 914px #FFF , 416px 670px #FFF , 665px 1298px #FFF , 621px 528px #FFF , 578px 1792px #FFF , 1972px 1433px #FFF , 677px 1908px #FFF , 806px 1953px #FFF , 1203px 1592px #FFF , 1138px 1362px #FFF , 1253px 153px #FFF , 1512px 1326px #FFF , 1726px 1015px #FFF , 685px 141px #FFF , 1031px 883px #FFF , 1269px 1272px #FFF , 1908px 1728px #FFF , 1433px 378px #FFF , 703px 207px #FFF , 350px 935px #FFF , 1475px 1326px #FFF , 1114px 1504px #FFF , 450px 941px #FFF , 1950px 1825px #FFF , 1507px 1113px #FFF , 931px 296px #FFF , 271px 1172px #FFF , 823px 531px #FFF , 1883px 279px #FFF , 80px 1834px #FFF , 242px 137px #FFF , 275px 1087px #FFF , 1375px 1319px #FFF , 820px 1176px #FFF , 912px 26px #FFF , 572px 79px #FFF , 303px 655px #FFF , 1849px 1435px #FFF , 702px 684px #FFF , 987px 1945px #FFF , 1934px 1667px #FFF , 267px 1753px #FFF , 216px 606px #FFF , 515px 1412px #FFF , 1598px 1181px #FFF , 897px 1853px #FFF , 1083px 121px #FFF , 413px 642px #FFF , 1819px 253px #FFF , 765px 556px #FFF , 525px 645px #FFF , 1748px 1135px #FFF , 1580px 1977px #FFF , 1580px 223px #FFF , 515px 134px #FFF , 116px 240px #FFF , 1629px 1470px #FFF , 1105px 1259px #FFF , 786px 1334px #FFF , 1908px 204px #FFF , 1519px 603px #FFF , 666px 1991px #FFF , 1208px 1483px #FFF , 73px 529px #FFF , 1246px 1602px #FFF , 1318px 118px #FFF , 1360px 937px #FFF , 1631px 1032px #FFF , 519px 765px #FFF , 916px 431px #FFF , 1931px 31px #FFF , 894px 224px #FFF , 1426px 316px #FFF , 1339px 1550px #FFF , 76px 1274px #FFF , 638px 1452px #FFF , 353px 1758px #FFF , 766px 1490px #FFF , 1410px 207px #FFF , 1560px 997px #FFF , 451px 766px #FFF , 1229px 1551px #FFF , 1135px 271px #FFF , 1879px 1980px #FFF , 467px 1434px #FFF , 1093px 911px #FFF , 1682px 396px #FFF , 824px 1910px #FFF , 465px 167px #FFF , 1324px 506px #FFF , 1731px 789px #FFF , 1092px 172px #FFF , 749px 983px #FFF , 1545px 284px #FFF , 1663px 1248px #FFF , 1575px 11px #FFF , 1691px 481px #FFF , 58px 1401px #FFF , 1677px 523px #FFF , 1068px 117px #FFF , 1045px 1694px #FFF , 1204px 117px #FFF , 1232px 272px #FFF , 599px 893px #FFF , 1655px 1178px #FFF , 270px 1912px #FFF , 599px 1774px #FFF , 16px 999px #FFF , 752px 106px #FFF , 1534px 219px #FFF , 1801px 1109px #FFF , 1178px 184px #FFF , 67px 243px #FFF , 1641px 221px #FFF , 1555px 1523px #FFF , 689px 1878px #FFF , 540px 1806px #FFF , 1888px 1799px #FFF , 691px 772px #FFF , 1217px 1399px #FFF , 936px 1856px #FFF , 909px 1831px #FFF , 1067px 982px #FFF , 1669px 318px #FFF , 526px 655px #FFF , 1415px 1580px #FFF , 370px 1959px #FFF , 1736px 1655px #FFF , 606px 1857px #FFF , 1313px 1005px #FFF , 544px 95px #FFF , 1215px 1591px #FFF , 865px 269px #FFF , 630px 1265px #FFF , 166px 523px #FFF , 296px 69px #FFF , 1291px 1400px #FFF , 515px 1464px #FFF , 1430px 315px #FFF , 721px 1265px #FFF , 383px 796px #FFF; }

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 1081px 1627px #FFF , 857px 1910px #FFF , 1043px 221px #FFF , 1333px 240px #FFF , 1717px 545px #FFF , 466px 2px #FFF , 1784px 849px #FFF , 1218px 532px #FFF , 336px 794px #FFF , 237px 395px #FFF , 1735px 228px #FFF , 435px 1332px #FFF , 1892px 1688px #FFF , 477px 473px #FFF , 1488px 383px #FFF , 465px 709px #FFF , 1112px 1445px #FFF , 1307px 760px #FFF , 638px 82px #FFF , 1948px 1031px #FFF , 1279px 341px #FFF , 774px 964px #FFF , 1487px 1354px #FFF , 1238px 885px #FFF , 183px 1616px #FFF , 382px 1294px #FFF , 1474px 892px #FFF , 1968px 1008px #FFF , 1114px 149px #FFF , 1603px 1306px #FFF , 920px 1897px #FFF , 1740px 1842px #FFF , 409px 695px #FFF , 820px 972px #FFF , 1338px 793px #FFF , 80px 1354px #FFF , 199px 79px #FFF , 1535px 725px #FFF , 1885px 334px #FFF , 1866px 584px #FFF , 244px 682px #FFF , 1472px 684px #FFF , 282px 1196px #FFF , 710px 1500px #FFF , 60px 85px #FFF , 1400px 827px #FFF , 218px 938px #FFF , 22px 703px #FFF , 1381px 1050px #FFF , 1789px 801px #FFF , 1160px 1975px #FFF , 1108px 1708px #FFF , 1907px 213px #FFF , 1709px 1593px #FFF , 1544px 1159px #FFF , 1718px 1119px #FFF , 1225px 1607px #FFF , 1354px 1249px #FFF , 1827px 1696px #FFF , 228px 1519px #FFF , 1526px 34px #FFF , 1422px 160px #FFF , 276px 1226px #FFF , 1286px 1330px #FFF , 1627px 558px #FFF , 1047px 547px #FFF , 804px 1624px #FFF , 523px 1708px #FFF , 1009px 1268px #FFF , 1017px 1512px #FFF , 102px 245px #FFF , 1009px 1251px #FFF , 352px 1288px #FFF , 780px 20px #FFF , 786px 445px #FFF , 1931px 461px #FFF , 1559px 555px #FFF , 1129px 1774px #FFF , 1316px 799px #FFF , 1955px 65px #FFF , 1190px 1770px #FFF , 510px 46px #FFF , 1686px 769px #FFF , 1289px 846px #FFF , 291px 954px #FFF , 1931px 1381px #FFF , 1431px 671px #FFF , 440px 49px #FFF , 1498px 364px #FFF , 820px 1506px #FFF , 621px 826px #FFF , 475px 122px #FFF , 937px 818px #FFF , 264px 1811px #FFF , 1302px 877px #FFF , 896px 938px #FFF , 1278px 1406px #FFF , 413px 522px #FFF , 704px 864px #FFF , 557px 1687px #FFF , 888px 1120px #FFF , 1006px 1992px #FFF , 1533px 1198px #FFF , 1614px 1635px #FFF , 1791px 927px #FFF , 1565px 1312px #FFF , 1966px 669px #FFF , 567px 1167px #FFF , 363px 1671px #FFF , 54px 941px #FFF , 1325px 1891px #FFF , 449px 253px #FFF , 1819px 1259px #FFF , 94px 750px #FFF , 1788px 159px #FFF , 47px 313px #FFF , 1621px 587px #FFF , 774px 252px #FFF , 864px 528px #FFF , 663px 1117px #FFF , 417px 1446px #FFF , 1806px 148px #FFF , 843px 501px #FFF , 414px 86px #FFF , 521px 324px #FFF , 34px 1765px #FFF , 1242px 1047px #FFF , 1601px 1133px #FFF , 1680px 177px #FFF , 1552px 1752px #FFF , 1234px 101px #FFF , 1152px 160px #FFF , 934px 828px #FFF , 126px 1861px #FFF , 600px 366px #FFF , 231px 783px #FFF , 1081px 1977px #FFF , 1129px 45px #FFF , 859px 1342px #FFF , 992px 459px #FFF , 254px 1773px #FFF , 884px 110px #FFF , 869px 278px #FFF , 723px 1090px #FFF , 695px 423px #FFF , 1230px 221px #FFF , 248px 1954px #FFF , 395px 1069px #FFF , 1522px 1055px #FFF , 426px 1350px #FFF , 1353px 547px #FFF , 371px 1623px #FFF , 911px 309px #FFF , 74px 156px #FFF , 1274px 1734px #FFF , 556px 678px #FFF , 1702px 347px #FFF , 576px 391px #FFF , 998px 1416px #FFF , 23px 603px #FFF , 428px 51px #FFF , 1649px 6px #FFF , 525px 751px #FFF , 502px 1478px #FFF , 1617px 1012px #FFF , 953px 471px #FFF , 507px 683px #FFF , 276px 338px #FFF , 596px 1034px #FFF , 1679px 1119px #FFF , 1308px 705px #FFF , 1005px 1900px #FFF , 1994px 601px #FFF , 1496px 448px #FFF , 1686px 1897px #FFF , 622px 1401px #FFF , 1447px 281px #FFF , 1646px 678px #FFF , 1321px 1273px #FFF , 96px 386px #FFF , 844px 779px #FFF , 994px 448px #FFF , 1458px 764px #FFF , 1859px 1339px #FFF , 115px 442px #FFF , 867px 774px #FFF , 94px 806px #FFF , 115px 501px #FFF , 1289px 316px #FFF , 1530px 1410px #FFF , 1216px 1095px #FFF , 1956px 1305px #FFF , 1518px 682px #FFF , 696px 964px #FFF , 1050px 1521px #FFF , 1256px 452px #FFF , 646px 739px #FFF , 833px 1531px #FFF , 193px 1376px #FFF , 1205px 1436px #FFF;
  animation: animStar 100s linear infinite; }
  #stars2:after {
    content: " ";
    position: absolute;

    width: 2px;
    height: 2px;
    background: transparent;
    box-shadow: 1081px 1627px #FFF , 857px 1910px #FFF , 1043px 221px #FFF , 1333px 240px #FFF , 1717px 545px #FFF , 466px 2px #FFF , 1784px 849px #FFF , 1218px 532px #FFF , 336px 794px #FFF , 237px 395px #FFF , 1735px 228px #FFF , 435px 1332px #FFF , 1892px 1688px #FFF , 477px 473px #FFF , 1488px 383px #FFF , 465px 709px #FFF , 1112px 1445px #FFF , 1307px 760px #FFF , 638px 82px #FFF , 1948px 1031px #FFF , 1279px 341px #FFF , 774px 964px #FFF , 1487px 1354px #FFF , 1238px 885px #FFF , 183px 1616px #FFF , 382px 1294px #FFF , 1474px 892px #FFF , 1968px 1008px #FFF , 1114px 149px #FFF , 1603px 1306px #FFF , 920px 1897px #FFF , 1740px 1842px #FFF , 409px 695px #FFF , 820px 972px #FFF , 1338px 793px #FFF , 80px 1354px #FFF , 199px 79px #FFF , 1535px 725px #FFF , 1885px 334px #FFF , 1866px 584px #FFF , 244px 682px #FFF , 1472px 684px #FFF , 282px 1196px #FFF , 710px 1500px #FFF , 60px 85px #FFF , 1400px 827px #FFF , 218px 938px #FFF , 22px 703px #FFF , 1381px 1050px #FFF , 1789px 801px #FFF , 1160px 1975px #FFF , 1108px 1708px #FFF , 1907px 213px #FFF , 1709px 1593px #FFF , 1544px 1159px #FFF , 1718px 1119px #FFF , 1225px 1607px #FFF , 1354px 1249px #FFF , 1827px 1696px #FFF , 228px 1519px #FFF , 1526px 34px #FFF , 1422px 160px #FFF , 276px 1226px #FFF , 1286px 1330px #FFF , 1627px 558px #FFF , 1047px 547px #FFF , 804px 1624px #FFF , 523px 1708px #FFF , 1009px 1268px #FFF , 1017px 1512px #FFF , 102px 245px #FFF , 1009px 1251px #FFF , 352px 1288px #FFF , 780px 20px #FFF , 786px 445px #FFF , 1931px 461px #FFF , 1559px 555px #FFF , 1129px 1774px #FFF , 1316px 799px #FFF , 1955px 65px #FFF , 1190px 1770px #FFF , 510px 46px #FFF , 1686px 769px #FFF , 1289px 846px #FFF , 291px 954px #FFF , 1931px 1381px #FFF , 1431px 671px #FFF , 440px 49px #FFF , 1498px 364px #FFF , 820px 1506px #FFF , 621px 826px #FFF , 475px 122px #FFF , 937px 818px #FFF , 264px 1811px #FFF , 1302px 877px #FFF , 896px 938px #FFF , 1278px 1406px #FFF , 413px 522px #FFF , 704px 864px #FFF , 557px 1687px #FFF , 888px 1120px #FFF , 1006px 1992px #FFF , 1533px 1198px #FFF , 1614px 1635px #FFF , 1791px 927px #FFF , 1565px 1312px #FFF , 1966px 669px #FFF , 567px 1167px #FFF , 363px 1671px #FFF , 54px 941px #FFF , 1325px 1891px #FFF , 449px 253px #FFF , 1819px 1259px #FFF , 94px 750px #FFF , 1788px 159px #FFF , 47px 313px #FFF , 1621px 587px #FFF , 774px 252px #FFF , 864px 528px #FFF , 663px 1117px #FFF , 417px 1446px #FFF , 1806px 148px #FFF , 843px 501px #FFF , 414px 86px #FFF , 521px 324px #FFF , 34px 1765px #FFF , 1242px 1047px #FFF , 1601px 1133px #FFF , 1680px 177px #FFF , 1552px 1752px #FFF , 1234px 101px #FFF , 1152px 160px #FFF , 934px 828px #FFF , 126px 1861px #FFF , 600px 366px #FFF , 231px 783px #FFF , 1081px 1977px #FFF , 1129px 45px #FFF , 859px 1342px #FFF , 992px 459px #FFF , 254px 1773px #FFF , 884px 110px #FFF , 869px 278px #FFF , 723px 1090px #FFF , 695px 423px #FFF , 1230px 221px #FFF , 248px 1954px #FFF , 395px 1069px #FFF , 1522px 1055px #FFF , 426px 1350px #FFF , 1353px 547px #FFF , 371px 1623px #FFF , 911px 309px #FFF , 74px 156px #FFF , 1274px 1734px #FFF , 556px 678px #FFF , 1702px 347px #FFF , 576px 391px #FFF , 998px 1416px #FFF , 23px 603px #FFF , 428px 51px #FFF , 1649px 6px #FFF , 525px 751px #FFF , 502px 1478px #FFF , 1617px 1012px #FFF , 953px 471px #FFF , 507px 683px #FFF , 276px 338px #FFF , 596px 1034px #FFF , 1679px 1119px #FFF , 1308px 705px #FFF , 1005px 1900px #FFF , 1994px 601px #FFF , 1496px 448px #FFF , 1686px 1897px #FFF , 622px 1401px #FFF , 1447px 281px #FFF , 1646px 678px #FFF , 1321px 1273px #FFF , 96px 386px #FFF , 844px 779px #FFF , 994px 448px #FFF , 1458px 764px #FFF , 1859px 1339px #FFF , 115px 442px #FFF , 867px 774px #FFF , 94px 806px #FFF , 115px 501px #FFF , 1289px 316px #FFF , 1530px 1410px #FFF , 1216px 1095px #FFF , 1956px 1305px #FFF , 1518px 682px #FFF , 696px 964px #FFF , 1050px 1521px #FFF , 1256px 452px #FFF , 646px 739px #FFF , 833px 1531px #FFF , 193px 1376px #FFF , 1205px 1436px #FFF; }

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 13px 849px #FFF , 1785px 1211px #FFF , 866px 943px #FFF , 1269px 1284px #FFF , 1049px 228px #FFF , 163px 1732px #FFF , 658px 812px #FFF , 974px 1792px #FFF , 962px 913px #FFF , 1848px 170px #FFF , 264px 1653px #FFF , 645px 1375px #FFF , 400px 1129px #FFF , 1271px 171px #FFF , 1722px 1955px #FFF , 117px 1525px #FFF , 1738px 1113px #FFF , 164px 501px #FFF , 388px 272px #FFF , 193px 263px #FFF , 82px 1370px #FFF , 1637px 669px #FFF , 1746px 1369px #FFF , 1258px 1023px #FFF , 1697px 1163px #FFF , 1829px 1430px #FFF , 1431px 1055px #FFF , 1197px 682px #FFF , 881px 1828px #FFF , 341px 141px #FFF , 1226px 1588px #FFF , 198px 1862px #FFF , 746px 1976px #FFF , 176px 641px #FFF , 1760px 499px #FFF , 20px 1108px #FFF , 232px 382px #FFF , 1318px 1817px #FFF , 897px 139px #FFF , 1734px 1650px #FFF , 299px 641px #FFF , 1991px 1032px #FFF , 1191px 454px #FFF , 1980px 1537px #FFF , 465px 255px #FFF , 1394px 1668px #FFF , 190px 650px #FFF , 1598px 1225px #FFF , 1824px 452px #FFF , 1441px 770px #FFF , 1986px 682px #FFF , 1882px 545px #FFF , 1279px 129px #FFF , 817px 558px #FFF , 1171px 1930px #FFF , 1865px 33px #FFF , 1096px 834px #FFF , 1783px 473px #FFF , 596px 1523px #FFF , 1396px 137px #FFF , 1px 1962px #FFF , 1732px 679px #FFF , 3px 656px #FFF , 597px 995px #FFF , 1313px 230px #FFF , 1707px 1670px #FFF , 841px 386px #FFF , 255px 1430px #FFF , 1297px 182px #FFF , 615px 1969px #FFF , 643px 446px #FFF , 908px 265px #FFF , 747px 615px #FFF , 1477px 1305px #FFF , 180px 843px #FFF , 438px 487px #FFF , 163px 1436px #FFF , 1251px 1170px #FFF , 535px 924px #FFF , 898px 393px #FFF , 984px 430px #FFF , 1268px 419px #FFF , 505px 1359px #FFF , 571px 1078px #FFF , 194px 1248px #FFF , 1816px 1300px #FFF , 1847px 1971px #FFF , 1174px 531px #FFF , 256px 618px #FFF , 1065px 1149px #FFF , 664px 339px #FFF , 1470px 1774px #FFF , 563px 480px #FFF , 723px 305px #FFF , 1397px 1714px #FFF , 574px 1879px #FFF , 483px 391px #FFF , 1939px 1541px #FFF , 597px 984px #FFF , 1093px 1694px #FFF;
  animation: animStar 150s linear infinite; }
  #stars3:after {
    content: " ";
    position: absolute;

    width: 3px;
    height: 3px;
    background: transparent;
    box-shadow: 13px 849px #FFF , 1785px 1211px #FFF , 866px 943px #FFF , 1269px 1284px #FFF , 1049px 228px #FFF , 163px 1732px #FFF , 658px 812px #FFF , 974px 1792px #FFF , 962px 913px #FFF , 1848px 170px #FFF , 264px 1653px #FFF , 645px 1375px #FFF , 400px 1129px #FFF , 1271px 171px #FFF , 1722px 1955px #FFF , 117px 1525px #FFF , 1738px 1113px #FFF , 164px 501px #FFF , 388px 272px #FFF , 193px 263px #FFF , 82px 1370px #FFF , 1637px 669px #FFF , 1746px 1369px #FFF , 1258px 1023px #FFF , 1697px 1163px #FFF , 1829px 1430px #FFF , 1431px 1055px #FFF , 1197px 682px #FFF , 881px 1828px #FFF , 341px 141px #FFF , 1226px 1588px #FFF , 198px 1862px #FFF , 746px 1976px #FFF , 176px 641px #FFF , 1760px 499px #FFF , 20px 1108px #FFF , 232px 382px #FFF , 1318px 1817px #FFF , 897px 139px #FFF , 1734px 1650px #FFF , 299px 641px #FFF , 1991px 1032px #FFF , 1191px 454px #FFF , 1980px 1537px #FFF , 465px 255px #FFF , 1394px 1668px #FFF , 190px 650px #FFF , 1598px 1225px #FFF , 1824px 452px #FFF , 1441px 770px #FFF , 1986px 682px #FFF , 1882px 545px #FFF , 1279px 129px #FFF , 817px 558px #FFF , 1171px 1930px #FFF , 1865px 33px #FFF , 1096px 834px #FFF , 1783px 473px #FFF , 596px 1523px #FFF , 1396px 137px #FFF , 1px 1962px #FFF , 1732px 679px #FFF , 3px 656px #FFF , 597px 995px #FFF , 1313px 230px #FFF , 1707px 1670px #FFF , 841px 386px #FFF , 255px 1430px #FFF , 1297px 182px #FFF , 615px 1969px #FFF , 643px 446px #FFF , 908px 265px #FFF , 747px 615px #FFF , 1477px 1305px #FFF , 180px 843px #FFF , 438px 487px #FFF , 163px 1436px #FFF , 1251px 1170px #FFF , 535px 924px #FFF , 898px 393px #FFF , 984px 430px #FFF , 1268px 419px #FFF , 505px 1359px #FFF , 571px 1078px #FFF , 194px 1248px #FFF , 1816px 1300px #FFF , 1847px 1971px #FFF , 1174px 531px #FFF , 256px 618px #FFF , 1065px 1149px #FFF , 664px 339px #FFF , 1470px 1774px #FFF , 563px 480px #FFF , 723px 305px #FFF , 1397px 1714px #FFF , 574px 1879px #FFF , 483px 391px #FFF , 1939px 1541px #FFF , 597px 984px #FFF , 1093px 1694px #FFF; }


@keyframes animStar {
  from {
    transform: translateY(0px); }
  to {
    transform: translateY(-2000px); } }

</style>
<body>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <h1 class="mb-0 pb-3"><span>Recover Password</span></h1>
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
            <div class="center-wrap">
                  <div class="section text-center">
                  <form method="post" action="message2.php">
                    <div class="form-group mt-2">
                      <input type="email" class="form-style" placeholder="Enter your email" name="email" id="email">
                      <i class="input-icon uil uil-at"></i>
                    </div>
                    <button type="submit" class="btn mt-4" name="validate_email">Validate Email</button>
                    </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>
