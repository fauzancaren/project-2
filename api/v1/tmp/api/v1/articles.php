<?php
$data['code']=20000;
$data['data']=array("total"=>100, 
    "items"=>array(
        "id"=>1,"timestamp"=>222655409862,"author"=>"Andri",
        "reviewer"=>"Laura",
        "title"=>"Nnbpglrl Pij Cdldt Qrrm Uvsovlq Setftl Lumeixpqb Bjjozoc",
        "content_short"=>"mock data",
        "content"=>"<p>I am testing data, I am testing data.</p>",
        "forecast"=>56.66,"importance"=>1,"type"=>"US","status"=>"draft",
        "display_time"=>"1983-08-18 15:34:29",
        "comment_disabled"=>true,"pageviews"=>4891,
        "image_uri"=>"https://wpimg.wallstcn.com/e4558086-631c-425c-9430-56ffb46e70b3",
        "platforms"=>array("a-platform")
    )
);
echo json_encode($data);
?>