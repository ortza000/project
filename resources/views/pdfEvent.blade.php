
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
            .attendance-table table{
                width: 100%;
                border-collapse: collapse;
                border: 1px solid #000;
              }

              .blank-cell{

                min-width: 50px;


              }

              .attendance-cell{

                padding: 8px;


              }

              .attendance-table table th.attendance-cell, .attendance-table table td.attendance-cell {
                  border: 1px solid #000;
              }
        </style>
    </head>
<body>

    @foreach($users1 as $row)
<h1 align="center">รายชื่อผู้เข้าร่วม{{$row->pro_name}}</h1>
@endforeach


               <div class="attendance-table">
               <table class="table-bordered">
                <tr>

                  <th class="attendance-cell"><h2>รายชื่อ</h2></th>
                  <th class="attendance-cell"><h2>เซ็นชื่อ</h2></th>

                </tr>
                  @foreach($users as $row)
                  <tr>

                    <td class="attendance-cell"><h3>{{$row->std_name}}</h3></td>
                    <td class="attendance-cell"></td>


                  </tr>
                  @endforeach

              </table>

            </div>



</body>
</html>
