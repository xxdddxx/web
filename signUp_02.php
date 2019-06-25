<?php include './top.php';?>
<?php include './header.php';?>
			
			<div class="nav-sub-box">
				<div class="inner"><!-- <a href="#"><img src="/" alt="배너이미지" width="171" height="196"></a> --></div>
			</div>

		</div>

		<div class="top-section">
			<div class="inner">
				<div class="link-box">
					<!-- 로그인전 -->
					<a href="#">로그인</a>
					<a href="#">회원가입</a>
					<a href="#">상담/고객센터</a>
					<!-- 로그인후 -->
					<!-- <a href="#">로그아웃</a>
					<a href="#">내정보</a>
					<a href="#">상담/고객센터</a> -->
				</div>
			</div>
		</div>
	</div>
<div id="container" class="container-full">
	<div id="content" class="content">
		<div class="inner">
			<div class="tit-box-h3">
				<h3 class="tit-h3">회원가입</h3>
				<div class="sub-depth">
					<span><i class="icon-home"><span>홈</span></i></span>
					<strong>회원가입 완료</strong>
				</div>
			</div>

			<div class="join-step-bar">
				<ul>
					<li><i class="icon-join-agree"></i> 약관동의</li>
					<li class="on"><i class="icon-join-chk"></i> 본인확인</li>
					<li class="last"><i class="icon-join-inp"></i> 정보입력</li>
				</ul>
			</div>

			<div class="tit-box-h4">
				<h3 class="tit-h4">본인인증</h3>
			</div>

			<div class="section-content after">
				<div class="identify-box" style="width:100%;height:190px;">
					<div class="identify-inner">
						<strong>휴대폰 인증</strong>
						<p>주민번호 없이 메시지 수신가능한 휴대폰으로 1개 아이디만 회원가입이 가능합니다. </p>

						<br />
						<input type="text" class="input-text" style="width:50px"/> - 
						<input type="text" class="input-text" style="width:50px"/> - 
						<input type="text" class="input-text" style="width:50px"/>
						<a href="#" class="btn-s-line">인증번호 받기</a>

						<br /><br />
						<input type="text" class="input-text" style="width:200px"/>
						<a href="/signUp_03.php" class="btn-s-line">인증번호 확인</a>
					</div>
					<i class="graphic-phon"><span>휴대폰 인증</span></i>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include './footer.php';?>