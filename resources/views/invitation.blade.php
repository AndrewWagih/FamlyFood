<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" />
  	
  	<link rel="stylesheet" href="{{asset('css/invite.css')}}" />
  	
</head>
<body>
  	
  <div class="top-contain">

<div class="inner">

<div class="left">   <img src="{{asset('assets/images/logo1.png')}}" alt=""> <img src="{{asset('assets/images/logo2.png')}}" alt=""> <img src="{{asset('assets/images/logo3.png')}}" alt="">     </div>
  

<div class=" right"> <h2>دعوة لضيوف المرصد العربي للترجمة </h2>  </div>
</div>
  	</div>
  	
	<div class="vector">
		<img src="{{asset('assets/images/Vector.png')}}" alt="">
	</div>
  	
  	
<div class="bottom-contian">
<div class="inner">
	<h3>سعياً لتعزيز العلاقة التشاركية بين المملكة العربية السعودية والمنظمة العربية للتربية والثقافة والعلوم (الألكسو) فـي إبراز دور المرصد العربـي للترجـمـة ليـكـون مـرصـداً مـوثـوقاً ومـنـصة عالمية للتبادل الثقافي.م</h3>


	<div class="invite">
		
		<img src="{{asset('assets/images/logo3.png')}}" alt="">
		<h4>يسرّنا دعوتكم لحضور حفل تدشين
		</h4>
	</div>
<h3  >المقام تحت رعاية وزارة الثقافة بمشاركة نخبة من قادات وخبراء الثقافة في الوطن العربي 
	<h3 class="desc" >نتطلع إلى حضوركم ومشاركتكم الحدث الثقافي المميز.م
 
	
</h3>

<h4 class="desc-2">شاكرين دعمكم وتشريفكم
</h4>

<div class="my-row">
	<div class="my-col"> 
		<div class="image"> <img src="{{asset('assets/images/logo4.svg')}}" alt="">  
		
		<span></span>
		<img src="{{asset('assets/images/Vector.png')}}" class="col-vector" alt="">
	</div>
		<div class="col-inner">
	<h6>الوصول المتوقع
		</h6>
		<h6>07:00 مساءاً </h6>
	</div> 
</div>
<div class="my-col"> 
	<div class="image"> <img src="{{asset('assets/images/logo5.svg')}}" alt="">  
	
	<span></span>
	<img src="{{asset('assets/images/Vector.png')}}" class="col-vector" alt="">
</div>
	<div class="col-inner">
<h6>الـسـبـت 13 يناير 2024  </h6>
</div> 
</div>
<div class="my-col"> 
	<div class="image"> <img src="{{asset('assets/images/logo6.svg')}}" alt="">  
	
	<span></span>
	<img src="{{asset('assets/images/Vector.png')}}" class="col-vector" alt="">
</div>
	<div class="col-inner">
<h6>فندق الريتزكارلتون</h6>
</div> 
</div>
	</div>

<div class="btns">
  <form method="POST" action="{{route('invitation.acceptOrReject',$id)}}">
    @csrf
    <input type="text" style="display: none" name="status" value="reject">
    <button style="background-color: #456C7B" >إعتذار</button>
</form>

<form method="POST" action="{{route('invitation.acceptOrReject',$id)}}">
  @csrf
  <input type="text" style="display: none" name="status" value="accept">
  <button style="background-color: #223A49" >قبول</button>
</form>




</div>


</div>






</div>


</body>
</html>