<?php
header('Content-Type: application/json; charset=utf-8');
$album = $_POST['album'];
$id = $_POST['id'];

if( $album == 'cooking' ){
	if( $id =='1' ){
		$imgs = array(
				array(
						"src" => "assets/img/gallery/1/img-1.jpg",
						"thumb" => "assets/img/gallery/1/img-1.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p>คอร์สสอนทำอาหาร รุ่นที่ 37</p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-2.jpg",
						"thumb" => "assets/img/gallery/1/img-2.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p>คอร์สสอนทำอาหาร รุ่นที่ 37</p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-3.jpg",
						"thumb" => "assets/img/gallery/1/img-3.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p></p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-4.jpg",
						"thumb" => "assets/img/gallery/1/img-4.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p></p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-5.jpg",
						"thumb" => "assets/img/gallery/1/img-5.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p></p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-6.jpg",
						"thumb" => "assets/img/gallery/1/img-6.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p></p>"
					),
				array(
						"src" => "assets/img/gallery/1/img-7.jpg",
						"thumb" => "assets/img/gallery/1/img-7.jpg",
						"subHtml" => "<h4>บรรยากาศอบรม</h4><p></p>"
					)
			);
	}
}

if( isset($imgs) )
	echo json_encode($imgs);
