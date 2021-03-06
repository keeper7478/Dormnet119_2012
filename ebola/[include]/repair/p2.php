﻿
<?php	// [Info.] The following code will be included in main page : div class "content"
?>

<!-- Include CSS -->
<link href="/Dormnet119_2012/ebola/[include]/repair/p2.css" rel="stylesheet" type="text/css" />


<center>
	<div>			
		<BUTTON onclick="self.location.href='p1.php'">前置檢查</BUTTON>
		<BUTTON onclick="self.location.href='p2.php'">填報修單</BUTTON>
		<BUTTON onclick="self.location.href='p3.php'">改報修單</BUTTON>
	</div>
	<hr>
</center>

<div>
	<h1 style="text-align: center; font-size: 36px; margin-left: -50px">宿網報修</h1>
</div>


<!-- onsubmit="return CheckInfo(); 是還要再寫一個 SCRIPT -->
<form name="buginfo" action="./?action=BugReport" method="post" onsubmit="return CheckInfo();">
	
	<!-- Box index 1 -->
	<div class="box1">
		<h2>聯絡方式</h2>
		<div class="input_type25em">
			<p>
				<input name="input_uname" placeholder="報修人姓名..." title="報修人姓名" maxlength="30" />
				*
			</p>
		</div>

		<div class="input_type25em">
			<p>
				<input name="input_email" placeholder="報修人手機..." title="報修人手機" maxlength="12" />
				*
				<span>
					<br />
					<small>(Ex. 0912-345-678)</small>
				</span>
			</p>
		</div>

		<div class="input_type25em">
			<p>
				<input name="input_email" placeholder="連絡信箱..." title="連絡信箱" maxlength="50" />
				*
				<span>
					<br />
					<small>(Ex. test@test.com)</small>
				</span>
			</p>
		</div>

		<div class="select_typ12em">
			<p>
				<select name="sel_dorm">
					<option value="" selected="selected"><-- 請選擇宿舍棟別 --></option>
					<option value="1">1. 武嶺一村</option>
					<option value="2">2. 武嶺二村</option>
					<option value="3">3. 武嶺三村</option>
					<option value="4">4. 武嶺四村</option>
					<option value="-">----------</option>
					<option value="A">A. 翠亨A棟</option>
					<option value="B">B. 翠亨B棟</option>
					<option value="C">C. 翠亨C棟</option>
					<option value="D">D. 翠亨D棟</option>
					<option value="E">E. 翠亨E棟</option>
					<option value="F">F. 翠亨F棟</option>
					<option value="G">G. 翠亨G棟</option>
					<option value="H">H. 翠亨H棟</option>
					<option value="L">L. 翠亨L棟</option>
				</select>
				*
			</p>
		</div>

		<div class="input_type5em">
			<p>
				<input name="input_room" placeholder="房號..." title="房號" maxlength="5" />
				-
				<input name="input_roomPos" placeholder="床號..." title="床號" maxlength="5" />
				*
				<span>
					<br />
					<small>(Ex. 001-1)</small>
				</span>
			</p>
		</div>
	</div>

	<!-- Box index 2 -->
	<div class="box1">
		<h2>電腦設定</h2>
		<div class="input_type25em">
			<p>
				<input name="input_ip" placeholder="報修 IP 位址 (IPv4)..." title="報修 IP 位址 (IPv4)" maxlength="15" />
				*
				<!--span class="tooltip">
					<img src="./images/tooltip.png" name="tooltip1" />
				</span-->
				<span>
					<br />
					<small>(Ex. 140.117.255.255)</small>
				</span>
			</p>
		</div>
		<div class="input_type25em">
			<p>
				<input name="input_mac" placeholder="報修網路卡號 (MAC)..." title="報修網路卡號 (MAC)" maxlength="17" />
				*
				<span>
					<br />
					<small>(Ex. 00-AA-11-BB-22-CC)</small>
				</span>
			</p>
		</div>
	</div>

	<!-- Box index 3 -->
	<div class="box1">
		<h2>問題描述</h2>
		<div class="select_typ12em">
			<p>初步問題研判：
				<select name="sel_problem">
					<option value="" selected="selected"><-- 請選擇問題類型 --></option>
					<option value="ipstolen">1. IP 被人佔用</option>
					<option value="reopen">2. 申請解除封鎖</option>
					<option value="broken">3. 網路插孔 外觀損壞，申請維修</option>
					<option value="dvo">4. 網路插孔 已損壞</option>
					<option value="others">5. 其他</option>
				</select>
				*
			</p>
		</div>

		<div>
			<p>
				<textarea rows="4" cols="50%" name="textarea_desc" placeholder="報修網路卡號 (MAC)...">你的問題描述...
				</textarea>
			</p>
		</div>

		<div class="textarea_typ16px">
			<table>
				<tr>
					<td>維修時段：</td>
					<td>8:00-10:00</td>
					<td>10:00-12:00</td>
					<td>12:00-14:00</td>
					<td>14:00-16:00</td>
					<td>16:00-18:00</td>
					<td>18:00-20:00</td>
					<td>20:00-22:00</td>
					<td>22:00-24:00</td>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜一</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜二</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜三</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜四</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜五</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜六</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
				<tr>
					<form  method="get">
						<td>禮拜日</td>
						<td><input type="checkbox" name="check1" id="8:00-10:00" /></td>
						<td><input type="checkbox" name="check1" id="10:00-12:00" /></td>
						<td><input type="checkbox" name="check1" id="12:00-14:00" /></td>
						<td><input type="checkbox" name="check1" id="14:00-16:00" /></td>
						<td><input type="checkbox" name="check1" id="16:00-18:00" /></td>
						<td><input type="checkbox" name="check1" id="18:00-20:00" /></td>
						<td><input type="checkbox" name="check1" id="20:00-22:00" /></td>
						<td><input type="checkbox" name="check1" id="22:00-24:00" /></td>
					</form>
				</tr>
			</table>
		
		</div>
		
		<br />
		<h3 class="formnote">送出維修申請單前，請再次確認上述資料填寫無誤，謝謝！</h3>
	</div>

	<div id="submitarea">
		<br />
		<input name="button_send" value="   送出 !   " type="submit" />
		<input name="button_clear" value="    清除    " type="reset" />
	</div>
</form>
