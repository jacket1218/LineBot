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
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                	if($m_message=='抽卡')
                	{
                        	$img_idx = rand(0,9);
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



				}
												
												
												

                	}
                    break;
                
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
