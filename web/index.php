<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');



$channelAccessToken = getenv('LINE_CHANNEL_ACCESSTOKEN');
$channelSecret = getenv('LINE_CHANNEL_SECRET');

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$img_idx_buff = array();

$array_idx = 0;
$image_group = 0;
$group_count = 0;
$idx_count = 0;
$temp = 0;

$MAX_GROUP = 5;

$GROUP_0 = 30;
$GROUP_1 = 30;
$GROUP_2 = 30;
$GROUP_3 = 30;
$GROUP_4 = 4;


foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                	if($m_message=='抽卡')
                	{	

										for($i=0;$i<10;$i++ ){
											$group_count = $group_count + ((rand(0,500)% $MAX_GROUP);
										}
										$image_group = $group_count/10;
										//$image_group = rand(0,500)% $MAX_GROUP;
										
										
										//先亂數Group, 再抽哪張卡片								
										switch($image_group){
											//group 0
											case 0:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_0);
												}	
												$img_idx = $idx_count/10;		
												//$img_idx = rand(0,10000)% $GROUP_0;				
												switch($img_idx){							
													//image 0  
													case 0:
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/oo23A7r.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/oo23A7r.jpg'
																)
															)
															));                               
													break;                               

													//image 1   
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/oo23A7r.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/oo23A7r.jpg'
																)
															)
															));                               
													break;                                

														//image 2 
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/BZ47MW2.png',
																	'previewImageUrl' => 'https://i.imgur.com/BZ47MW2.png'
																)
															)
															));                               
													break;      

													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/p4gxlz6.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/p4gxlz6.jpg'
																)
															)
															));                               
													break;      

													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/MrOMxZd.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/MrOMxZd.jpg'
																)
															)
															));                               
													break;   

													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/ZmPEJia.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/ZmPEJia.jpg'
																)
															)
															));                               
													break;   

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/sXTWD1D.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/sXTWD1D.jpg'
																)
															)
															));                               
													break;   

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/dvMHK2Z.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/dvMHK2Z.jpg'
																)
															)
															));                               
													break;   															
								
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/9oF5lVB.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/9oF5lVB.jpg'
																)
															)
															));                               
													break;   

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/HmoemNf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/HmoemNf.jpg'
																)
															)
															));                               
													break;   																

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/GM3DFvr.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/GM3DFvr.jpg'
																)
															)
															));                               
													break;   										

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/e9A0ecY.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/e9A0ecY.jpg'
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/XuzKnvA.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/XuzKnvA.jpg'
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/IXiJvCo.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/IXiJvCo.jpg'
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/YLizXUA.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/YLizXUA.jpg'
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/FKQgbiq.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/FKQgbiq.jpg'
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Dz8jY4P.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Dz8jY4P.jpg'
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/9DcSN9T.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/9DcSN9T.jpg'
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/8r1c4eY.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/8r1c4eY.jpg'
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/k8bFiNA.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/k8bFiNA.jpg'
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/0oixblM.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/0oixblM.jpg'
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/B3Ma0SM.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/B3Ma0SM.jpg'
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/tZZruIA.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/tZZruIA.jpg'
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/5xxAUgC.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/5xxAUgC.jpg'
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/v3Qq8qa.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/v3Qq8qa.jpg'
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/4GxzmAp.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/4GxzmAp.jpg'
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/GWrYhdb.png',
																	'previewImageUrl' => 'https://i.imgur.com/GWrYhdb.png'
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/8moZLPd.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/8moZLPd.jpg'
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/sb3A1cN.png',
																	'previewImageUrl' => 'https://i.imgur.com/sb3A1cN.png'
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/lNm6xyR.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/lNm6xyR.jpg'
																)
															)
															));                               
													break; 		
												}//group1
											break;
											
											
											
											//group 1
											case 1:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_1);
												}	
												$img_idx = $idx_count/10;													
												//$img_idx = rand(0,10000)% $GROUP_1;																
												switch($img_idx){
													//image 0
													case 0: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/VyjZ6Gf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/VyjZ6Gf.jpg'
																)
															)
															));                               
													break; 															
													
													//image 1
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/tNp2JzJ.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/tNp2JzJ.jpg'
																)
															)
															));                               
													break; 		

													//image 2
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/CtLAVIU.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/CtLAVIU.jpg'
																)
															)
															));                               
													break; 		
															
													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/FS9aV5g.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/FS9aV5g.jpg'
																)
															)
															));                               
													break; 													
															
													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/JDCxjdV.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/JDCxjdV.jpg'
																)
															)
															));                               
													break; 	

													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/PEHqf0U.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/PEHqf0U.jpg'
																)
															)
															));                               
													break; 		

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/9nYeoBf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/9nYeoBf.jpg'
																)
															)
															));                               
													break; 		

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Or0G2Sp.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Or0G2Sp.jpg'
																)
															)
															));                               
													break; 															
															
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/CGYQxlF.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/CGYQxlF.jpg'
																)
															)
															));                               
													break; 	

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/OxSl7me.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/OxSl7me.jpg'
																)
															)
															));                               
													break; 		

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/yY5lfGm.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/yY5lfGm.jpg'
																)
															)
															));                               
													break; 														

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/8E4lKbI.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/8E4lKbI.jpg'
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/53zamMy.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/53zamMy.jpg'
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/u18oJii.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/u18oJii.jpg'
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/WVGSCQy.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/WVGSCQy.jpg'
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/LI8Sa8x.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/LI8Sa8x.jpg'
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/xHdHEqY.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/xHdHEqY.jpg'
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/3WTzrl3.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/3WTzrl3.jpg'
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/zrFgDA1.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/zrFgDA1.jpg'
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/V12J0vI.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/V12J0vI.jpg'
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Oh8JOgP.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Oh8JOgP.jpg'
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/jw56iYL.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/jw56iYL.jpg'
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/qCzMIzO.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/qCzMIzO.jpg'
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/gSGxXmb.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/gSGxXmb.jpg'
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/bGAQnZ4.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/bGAQnZ4.jpg'
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/K3Pez3c.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/K3Pez3c.jpg'
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/YQ2Wono.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/YQ2Wono.jpg'
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/FP4ALm8.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/FP4ALm8.jpg'
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/TEhT41T.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/TEhT41T.jpg'
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/cOG6ljm.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/cOG6ljm.jpg'
																)
															)
															));                               
													break; 													
												
												
												}
											break;
											
											
											
											//group 2
											case 2:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_2);
												}	
												$img_idx = $idx_count/10;													
												//$img_idx = rand(0,10000)% $GROUP_2;									
												switch($img_idx){							
													//image 0  
													case 0:
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/PM3We9f.jpg',
																		'previewImageUrl' => 'https://i.imgur.com/PM3We9f.jpg'
																)
															)
															));                               
													break;                               

													//image 1   
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/WORM2Jm.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/WORM2Jm.jpg'
																)
															)
															));                               
													break;                                

														//image 2 
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/PkJ3UFM.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/PkJ3UFM.jpg'
																)
															)
															));                               
													break;      

													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/0T5JwYR.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/0T5JwYR.jpg'
																)
															)
															));                               
													break;      

													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/dRLvwOb.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/dRLvwOb.jpg'
																)
															)
															));                               
													break;   

													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/LSQDoDe.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/LSQDoDe.jpg'
																)
															)
															));                               
													break;   

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/g8WnRJB.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/g8WnRJB.jpg'
																)
															)
															));                               
													break;   

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/PrvS6xf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/PrvS6xf.jpg'
																)
															)
															));                               
													break;   															
								
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/e6RzRSH.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/e6RzRSH.jpg'
																)
															)
															));                               
													break;   

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/tdiL8Bw.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/tdiL8Bw.jpg'
																)
															)
															));                               
													break;   																

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/1SpyEqd.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/1SpyEqd.jpg'
																)
															)
															));                               
													break;   										

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/65Y2wiZ.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/65Y2wiZ.jpg'
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/oQ0zt5L.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/oQ0zt5L.jpg'
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/W20EUsW.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/W20EUsW.jpg'
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/3MhFhu8.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/3MhFhu8.jpg'
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/U0RMKc5.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/U0RMKc5.jpg'
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/tgc1tH5.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/tgc1tH5.jpg'
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Ml0vBMd.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Ml0vBMd.jpg'
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/MvBjoMJ.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/MvBjoMJ.jpg'
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/dDUbk8R.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/dDUbk8R.jpg'
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Fkf5YEv.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Fkf5YEv.jpg'
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/BiAEJfj.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/BiAEJfj.jpg'
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/7RnBkmG.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/7RnBkmG.jpg'
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/uhSt0Wt.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/uhSt0Wt.jpg'
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/rUl9W1T.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/rUl9W1T.jpg'
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/YSCBUaL.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/YSCBUaL.jpg'
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/UhWilcT.png',
																	'previewImageUrl' => 'https://i.imgur.com/UhWilcT.png'
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/ElT06ll.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/ElT06ll.jpg'
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/2DiUFiO.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/2DiUFiO.jpg'
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/vr2jcy7.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/vr2jcy7.jpg'
																)
															)
															));                               
													break; 		

												}//group 2
											
											break;
											
											
											
											//group 3
											case 3:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_3);
												}	
												$img_idx = $idx_count/10;													
												//$img_idx = rand(0,10000)% $GROUP_3;									
												switch($img_idx){							
													//image 0  
													case 0:
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/iwSO3Bn.jpg',
																		'previewImageUrl' => 'https://i.imgur.com/iwSO3Bn.jpg'
																)
															)
															));                               
													break;                               

													//image 1   
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/VMYg6fM.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/VMYg6fM.jpg'
																)
															)
															));                               
													break;                                

														//image 2 
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/INeX1lz.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/INeX1lz.jpg'
																)
															)
															));                               
													break;      

													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/IyeBfJm.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/IyeBfJm.jpg'
																)
															)
															));                               
													break;      

													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/p3c6tsI.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/p3c6tsI.jpg'
																)
															)
															));                               
													break;   

													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/AUQFYQ9.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/AUQFYQ9.jpg'
																)
															)
															));                               
													break;   

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/AJrAJ0r.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/AJrAJ0r.jpg'
																)
															)
															));                               
													break;   

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/x2uEz7Y.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/x2uEz7Y.jpg'
																)
															)
															));                               
													break;   															
								
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/QEBSOgT.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/QEBSOgT.jpg'
																)
															)
															));                               
													break;   

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/ba0jvwz.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/ba0jvwz.jpg'
																)
															)
															));                               
													break;   																

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/TCJ0Nej.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/TCJ0Nej.jpg'
																)
															)
															));                               
													break;   										

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/NwKh8ei.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/NwKh8ei.jpg'
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/SUPgUTj.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/SUPgUTj.jpg'
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/v5iViBk.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/v5iViBk.jpg'
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/WnugsED.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/WnugsED.jpg'
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/CRNvInG.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/CRNvInG.jpg'
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/p3dbfCf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/p3dbfCf.jpg'
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/08GgXnf.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/08GgXnf.jpg'
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/u5Qnsid.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/u5Qnsid.jpg'
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/fCQG6FK.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/fCQG6FK.jpg'
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/mYjrnzN.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/mYjrnzN.jpg'
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/KOKglZC.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/KOKglZC.jpg'
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/PMy4dHg.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/PMy4dHg.jpg'
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/aetWsCJ.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/aetWsCJ.jpg'
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/5nKcpPq.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/5nKcpPq.jpg'
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/JmIDp7m.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/JmIDp7m.jpg'
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/8McaA22.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/8McaA22.jpg'
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/aRskd6A.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/aRskd6A.jpg'
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/15UXE3u.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/15UXE3u.jpg'
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/Ad14jKP.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/Ad14jKP.jpg'
																)
															)
															));                               
													break; 		

												}//group 3
											break;

				

											//group 4
											case 4:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_4);
												}	
												$img_idx = $idx_count/10;													
												//$img_idx = rand(0,10000)% $GROUP_4;									
												switch($img_idx){							
													//image 0  
													case 0:
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => 'https://i.imgur.com/5ZXR6pQ.jpg',
																		'previewImageUrl' => 'https://i.imgur.com/5ZXR6pQ.jpg'
																)
															)
															));                               
													break;                               

													//image 1   
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/2JLNsTs.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/2JLNsTs.jpg'
																)
															)
															));                               
													break;                                

														//image 2 
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/juvvrKH.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/juvvrKH.jpg'
																)
															)
															));                               
													break;      

													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/N3WKblD.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/N3WKblD.jpg'
																)
															)
															));                               
													break;      

													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => 'https://i.imgur.com/iqKK3e5.jpg',
																	'previewImageUrl' => 'https://i.imgur.com/iqKK3e5.jpg'
																)
															)
															));                               
													break;   
/*
													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   															
								
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   																

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   										

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		
*/
												}//group 4
											break;											
											
											
/*											
											//group 5
											case 5:
												for($i=0;$i<10;$i++ ){
													$idx_count = $idx_count + (rand(0,10000)% $GROUP_5);
												}	
												$img_idx = $idx_count/10;													
												//$img_idx = rand(0,10000)% $GROUP_5;									
												switch($img_idx){							
													//image 0  
													case 0:
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => '',
																		'previewImageUrl' => ''
																)
															)
															));                               
													break;                               

													//image 1   
													case 1: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;                                

														//image 2 
													case 2: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;      

													//image 3
													case 3: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;      

													//image 4
													case 4: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 5
													case 5: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 6
													case 6: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 7
													case 7: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   															
								
													//image 8
													case 8: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   

													//image 9
													case 9: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   																

													//image 10
													case 10: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   										

													//image 11
													case 11: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   											

													//image 12
													case 12: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   											

													//image 13
													case 13: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 14
													case 14: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																		'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 15
													case 15: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   			

													//image 16
													case 16: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;   	

													//image 17
													case 17: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 18
													case 18: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 19
													case 19: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 20
													case 20: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 21
													case 21: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 22
													case 22: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  

													//image 23
													case 23: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break;  
															
													//image 24
													case 24: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 													

													//image 25
													case 25: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		
															
													//image 26
													case 26: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		

													//image 27
													case 27: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 															
															
													//image 28
													case 28: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		

													//image 29
													case 29: 
															$client->replyMessage(array(
															'replyToken' => $event['replyToken'],
															'messages' => array(
																array(
																	'type' => 'image',
																	'originalContentUrl' => '',
																	'previewImageUrl' => ''
																)
															)
															));                               
													break; 		

												}//groupXXX
											break;
*/											
										}	//抽group 	
									}
									elseif($m_message=='新年快樂'){
										$client->replyMessage(array(
										'replyToken' => $event['replyToken'],
										'messages' => array(
												array(
														'type' => 'image',
														'originalContentUrl' => 'https://i.imgur.com/RwVHccA.jpg',
														'previewImageUrl' => 'https://i.imgur.com/RwVHccA.jpg'
												),
												
												array(
														'type' => 'image',
														'originalContentUrl' => 'https://i.imgur.com/7mSydTz.jpg',
														'previewImageUrl' => 'https://i.imgur.com/7mSydTz.jpg'
												),

												array(
														'type' => 'image',
														'originalContentUrl' => 'https://i.imgur.com/26rrmsf.jpg',
														'previewImageUrl' => 'https://i.imgur.com/26rrmsf.jpg'
												),

												array(
														'type' => 'image',
														'originalContentUrl' => 'https://i.imgur.com/y9x50SI.jpg',
														'previewImageUrl' => 'https://i.imgur.com/y9x50SI.jpg'
												)		
												
										)
										));   									
				
									}
							break;	
						}
          break; 
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
