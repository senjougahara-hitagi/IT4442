<!-- Form hiển thị yêu cầu nhập thông tin card -->

<h2 align="center">Thông tin thẻ thanh toán</h2>
<br>
<br>
<form method='post' action='payment.php' >
 <table align="center">
   <tr>
     <td height='40px' >Lưu ý : </td>
     <td>
       Tên ngân hàng, tên chủ thẻ , mã thẻ, ngày phát hành không được để trống
     </td>
   </tr>
   <tr>
     <td>Tên ngân hàng:</td>
     <td>
      <select name='bank_name'>
        <option value="">Chọn ngân hàng</option>
        <option value="Vietin">Vietin Bank</option>
        <option value="BIDV">BIDV Bank</option>
        <option value="TechCom">TechCom Bank</option>
        <option value="LE">LE Bank</option>
      </select>
     </td>
   </tr>
   <tr>
     <td width='180px' >Tên chủ thẻ:</td>
     <td>
       <input type='text' style='width:400px' name='ten_chu_the' >
     </td>
   </tr>
   <tr>
     <td>Mã thẻ: </td>
     <td>
       <input type='number' style='width:400px' name='ma_the' maxlength="16">
     </td>
   </tr>
   <tr>
     <td>Ngày phát hành: </td>
     <td>
       <input type='date' style='width:400px' name='ngay_phat_hanh' >
     </td>
   </tr>
 </table>
 <hr>
 <div align='center'>
   <input align='center' type='submit' name='bank' value='Mua hàng' >
 </div>
</form>
