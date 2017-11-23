<!-- Form hiển thị yêu cầu nhập thông tin khách hàng -->

<h2 align="center">Thông tin giao hàng</h2>
<br>
<br>
<form method='post' action='payment.php' >
 <table align="center">
   <tr>
     <td height='40px' >Lưu ý : </td>
     <td>
       Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào
     </td>
   </tr>
   <tr>
     <td width='180px' >Tên người mua :</td>
     <td>
       <input type='text' style='width:400px' name='ten_nguoi_mua' required>
     </td>
   </tr>
   <tr>
     <td>Email : </td>
     <td>
       <input type='text' style='width:400px' name='email' required>
     </td>
   </tr>
   <tr>
     <td>Địa chỉ : </td>
     <td>
       <textarea style='width:400px' name='dia_chi' required></textarea>
     </td>
   </tr>
   <tr>
     <td>Điện thoại : </td>
     <td>
       <input type='number' style='width:400px' name='dien_thoai' required>
     </td>
   </tr>
   <tr>
     <td align='center' colspan="2"><h2>Phương thức thanh toán</h2></td>
   </tr>
   <tr>
     <td><input type="radio" name="select_payment" value="deliver" required>Thanh toán khi giao hàng</td>
     <td><input type="radio" name="select_payment" value="card">Thanh toán qua chuyển khoản</td>
   </tr>
 </table>
 <hr>
 <div align='center'>
   <input align='center' type='submit' name='Mua_hang' value='Mua hàng' >
 </div>
</form>
