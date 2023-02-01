 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery3.6.1.min.js"></script>
    <title>bai tap 1</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
                $.ajax({
                type: "GET",
                url: 'server_ajax.php',   
                           
                data: {
                    nba : $("#nba").val(),
                    nbb : $("#nbb").val(),
                    // radio : $("input[name='radio']").val()
                    cong : $("#cong").val(),
                    tru : $("#tru").val(),
                    nhan : $("#nhan").val(),
                    chia : $("#chia").val(),

                },
                success : function(data){
                    // $("#kq").append(data);
                    //console.log(data);
                     alert(data);
                }                
            })//.done(function(data){
                //$("#kq").append(data);  
                
        });
            // $("#kq").load("server_ajax.php");
        });
    //});
    </script>
</head>
<body>
    <form action="">
        <table>
        <tr>
        <th>
            <label for="a">Nhập số a :</label>
        </th>
         <td>
            <input type="text" id="nba" name="nba">
        </td>
         
    </tr>
    <tr>
       <th>
            <label for="b">Nhập số b :</label>
        </th>
        <td>
            <input type="text" value="" id="nbb" name="nbb">
        </td>
    </tr>
    <tr>
        <th>
             <label for="b" >Chọn phép tính :</label>
         </th>
         <td>
             <label for="cong">phép Cộng</label>
             <input type="radio" value="+" id="cong" name="radio">
             <label for="tru">phép Trừ</label>
             <input type="radio" value="-"  id="tru" name="radio">
              <label for="nhan">phép Nhân </label>
             <input type="radio" value="*"  id="nhan" name="radio">
             <label for="chia">phép chia</label>
             <input type="radio" value=":"  id="chia" name="radio">
             
         </td>
     </tr>
     <tr>
        <th>
             <label for="b">Thực thi:</label>
         </th>
         <td>
             <button type="submit" id="submit" name="submit">Thực thi</button>
         </td>
     </tr>
     <tr>
        <th>
             <label for="kq">kết quả:</label>
         </th>
         <td>
             <input type="text" placeholder="Kết quả" name="kq" id="kq">
         </td>
     </tr>
    </table>
    </form>
    
    
</body>
</html>
<!-- tạo số a va b ngoài giao diện 
thêm 1 input kq
raius button 
nút thực hiện 
quy trình thực hiện :
ng dùng nhập 2 số a b Click chọn nút phép tính , nhấn thực hiện hiển thị kq ở  inp k chạy lại trang  -->
<!-- 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                alert().load("server_ajax.php",{
                    nba : $("#nba").val(),
                    nbb : $("#nbb").val(),
                    cong : $("#cong").val(),
                    tru : $("#tru").val(),
                    nhan : $("#nhan").val(),
                    chia : $("#chia").val()
                })
            })
        })
    </script>
 </head>
 <body>
    <form action="">
        <table>
        <tr>
        <th>
            <label for="a">Nhập số a :</label>
        </th>
         <td>
            <input type="text" id="nba" name="nba">
        </td>
         
    </tr>
    <tr>
       <th>
            <label for="b">Nhập số b :</label>
        </th>
        <td>
            <input type="text" value="" id="nbb" name="nbb">
        </td>
    </tr>
    <tr>
        <th>
             <label for="b" >Chọn phép tính :</label>
         </th>
         <td>
             <label for="cong">phép Cộng</label>
             <input type="radio" value="+" name="cong" id="cong" name="radio">
             
             <label for="tru">phép Trừ</label>
             <input type="radio" value="-" name="tru" id="tru" name="radio">
             
              <label for="nhan">phép Nhân </label>
             <input type="radio" value="*" name="nhan" id="nhan" name="radio">
            
             <label for="chia">phép chia</label>
             <input type="radio" value=":" name="chia" id="chia" name="radio">
             
         </td>
     </tr>
     <tr>
        <th>
             <label for="b">Thực thi:</label>
         </th>
         <td>
             <button type="submit" value="" id="submit" name="submit">Thực thi</button>
         </td>
     </tr>
     <tr>
        <th>
             <label for="kq">kết quả:</label>
         </th>
         <td>
             <input type="text" placeholder="Kết quả" name="kq" id="kq">
         </td>
     </tr>
    </table>
    </form>
 </body>
 </html> -->
