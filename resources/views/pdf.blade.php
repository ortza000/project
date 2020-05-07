
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
            }

            body {
                font-family: "THSarabunNew";
            }

        </style>
    </head>
<body>
    <div style="width:650px; height:600px; padding:20px; text-align:center; border: 10px solid #FF9933 " >
        <div style="width:600px; height:550px; padding:20px; text-align:center; border: 5px solid #282726; background-color:#F0BC88">
<br><br><br>

               <span style="font-size:50px; font-weight:bold">มหาวิทยาลัย บูรพา วิทยาเขตจันทบุรี</span>
               <span style="font-size:30px; font-weight:bold">ขอมอบเกียรติบัตรฉบับนี้ไว้เเสดงว่า</span>
               <br><br>       @foreach ($certificate as $row)
               <br><br>
               <span style="font-size:30px"><b>คุณ {{$row->std_name}} </b></span><br/><br/>
               <span style="font-size:25px"><i>สำเร็จการอบรมตามหลักสูตร</i></span> <br/><br/>
               <span style="font-size:30px">โคงการ  {{$row->course_name}}</span> <br/><br/>


              @endforeach



        </div>
        </div>


</body>
</html>
