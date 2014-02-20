<?php
session_start();
require_once('header.php');

extract($_REQUEST);

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

$sri_id	=	base64_decode($sri_id);


if($_POST) {

	$queryInsert	=	"INSERT INTO ".TABLE_TOUR_ENQUIRY." (user_name,user_email,user_phone,user_msg,tour_id,insertedDate) VALUES ('$user_name','$user_email','$user_phone','$user_msg','$tour_id',NOW())";

	//exit(0);
	//$resultInsert	=	mysql_query($queryInsert) or die(mysql_error());;

	if($resultInsert) {
		$msg	=	"You will be replied back";
	}
	else {
		$msg	=	"Datas are not inserted";
	}

	$msg	=	"Thank you for your enquiry.  You will be replied back";

	$selectCount	=	"SELECT * FROM ".TABLE_SRI." WHERE sri_id = '$sri_id'";
	$selectResult	=	mysql_query($selectCount) or die (mysql_error());
	$num			=	mysql_num_rows($selectResult);	
	
	$mail_content = "<table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' height='25' align='left' valign='middle'><strong>Departure  date</strong></td>
                  <td width='24%' align='left' valign='middle'><strong>Return  date</strong></td>
                  <td width='26%' align='left' valign='middle'><strong>Travel  flexibility</strong></td>
                  <td width='25%' align='left' valign='middle'><strong>Preferred  Airport</strong></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><input type='text' name='textfield' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield2' size='25' class='input' /></td>
                  <td align='left' valign='middle'><select name='select' class='input' style='width:200px'>
                      <option selected='selected'>- select -</option>
                      <option>Not Flexible</option>
                      <option>-1+1</option>
                      <option>-2+2</option>
                  </select></td>
                  <td align='left' valign='middle'><select name='select2' class='input' style='width:200px'>
                      <option selected='selected'>- select -</option>
                      <option>Z&uuml;rich</option>
                      <option>Basel </option>
                      <option>Geneva</option>
                      <option>Frankfurt</option>
                      <option>Milano</option>
                  </select></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'>&nbsp;</td>
            </tr>
            <tr>
              <td align='left' valign='top'><strong>Contact Details</strong></td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                  <td width='24%' align='left' valign='middle'class='txt'>Surname : </td>
                  <td width='26%' align='left' valign='middle'class='txt'>Telephone No : </td>
                  <td width='25%' align='left' valign='middle'class='txt'>Mobile No : </td>
                </tr>
                <tr>
                  <td height='25' align='left' valign='top'><input type='text' name='textfield3' size='25' class='input' />                  </td>
                  <td align='left' valign='top'><input type='text' name='textfield22' size='25' class='input' /></td>
                  <td align='left' valign='middle'><label>
                    <input type='text' name='textfield42' size='25' class='input' />
                  </label></td>
                  <td align='left' valign='top'><input type='text' name='textfield4' size='25' class='input' /></td>
                </tr>
                <tr>
                  <td height='29' align='left' valign='middle'><p>E-Mail Id :</p></td>
                  <td align='left' valign='middle'>Re-enter e-mail address : </td>
                  <td align='left' valign='middle'>Address : </td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
                <tr>
                  <td height='25' align='left' valign='top'><input type='text' name='textfield5' size='25' class='input' /></td>
                  <td align='left' valign='top'><input type='text' name='textfield6' size='25' class='input' /></td>
                  <td align='left' valign='middle'><textarea name='textarea' cols='15' class='input'></textarea></td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan='4' align='left' valign='middle'>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' height='25' align='left' valign='middle'><strong>Passenger</strong></td>
                  <td width='24%' align='left' valign='middle'><strong>Adult  (+12)</strong></td>
                  <td width='26%' align='left' valign='middle'><strong>Children  (Age 2-11)</strong></td>
                  <td width='25%' align='left' valign='middle'><strong>Infant  (under 2 years)</strong></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'><input type='text' name='textfield23' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield232' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield233' size='25' class='input' /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'>&nbsp;</td>
            </tr>
            <tr>
              <td align='left' valign='top'><strong>Passenger</strong> 1 </td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' align='left' valign='middle' class='txt'>&nbsp;</td>
                  <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                  <td width='26%' align='left' valign='middle'class='txt'>Surname : </td>
                  <td width='25%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><select name='select3' class='input' style='width:200px'>
                    <option selected='selected'>- select -</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                                    </select></td>
                  <td height='25' align='left' valign='middle'><input type='text' name='textfield84' size='25' class='input' />                  </td>
                  <td align='left' valign='middle'><input type='text' name='textfield822' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield832' size='25' class='input' /></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td height='18' align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'><strong>Passenger</strong> 2 </td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' align='left' valign='middle' class='txt'>&nbsp;</td>
                  <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                  <td width='26%' align='left' valign='middle'class='txt'>Surname : </td>
                  <td width='25%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><select name='select4' class='input' style='width:200px'>
                      <option selected='selected'>- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height='25' align='left' valign='middle'><input type='text' name='textfield842' size='25' class='input' />                  </td>
                  <td align='left' valign='middle'><input type='text' name='textfield8222' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield8322' size='25' class='input' /></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td height='18' align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'><strong>Passenger </strong>3</td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' align='left' valign='middle' class='txt'>&nbsp;</td>
                  <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                  <td width='26%' align='left' valign='middle'class='txt'>Surname : </td>
                  <td width='25%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><select name='select5' class='input' style='width:200px'>
                      <option selected='selected'>- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height='25' align='left' valign='middle'><input type='text' name='textfield8422' size='25' class='input' />                  </td>
                  <td align='left' valign='middle'><input type='text' name='textfield82222' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield83222' size='25' class='input' /></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td height='18' align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'><strong>Passenger </strong>4</td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' align='left' valign='middle' class='txt'>&nbsp;</td>
                  <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                  <td width='26%' align='left' valign='middle'class='txt'>Surname : </td>
                  <td width='25%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><select name='select6' class='input' style='width:200px'>
                      <option selected='selected'>- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height='25' align='left' valign='middle'><input type='text' name='textfield84222' size='25' class='input' />                  </td>
                  <td align='left' valign='middle'><input type='text' name='textfield822222' size='25' class='input' /></td>
                  <td align='left' valign='middle'><input type='text' name='textfield832222' size='25' class='input' /></td>
                </tr>
                <tr>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td height='18' align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                  <td align='left' valign='middle'>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='25%' align='left' valign='middle' class='txt'><p><strong>Add more passengers</strong></p></td>
                  <td width='24%' height='25' align='left' valign='middle' class='txt'><p><strong>Special Wishes &amp;  rem.</strong></p></td>
                  <td width='26%' align='left' valign='middle'class='txt'>&nbsp;</td>
                  <td width='25%' align='left' valign='middle'class='txt'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='top'><input type='text' name='textfield8422222' size='25' class='input' /></td>
                  <td height='25' colspan='3' align='left' valign='middle'><textarea name='textarea2' cols='70' class='textarea'></textarea></td>
                  </tr>
                <tr>
                  <td align='left' valign='top'>&nbsp;</td>
                  <td height='25' colspan='3' align='left' valign='middle'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='top' class='rtxtr'><strong>Plan My Tour</strong></td>
                  <td height='25' colspan='3' align='left' valign='middle'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='top' class='txt'>Main Destination</td>
                  <td height='25' colspan='3' align='left' valign='middle'>&nbsp;</td>
                </tr>
                <tr>
                  <td height='30' colspan='4' align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td height='30' align='left' valign='top' class='rtxtr'>Srilanka</td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='12%' align='left' valign='top' class='txt'>No of Days :</td>
                            <td width='23%' align='left' valign='top'><input type='text' name='textfield842222' size='25' class='input' /></td>
                            <td width='46%' align='left' valign='top' class='txt'>Of which how many days would you like to spend  at a beach location : </td>
                            <td width='19%' align='left' valign='top'><input type='text' name='textfield8422223' size='25' class='input' /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height='30' align='left' valign='top' class='txt'><p><strong>Add another country to your tour: you can add Dubai or/and Male to your  tour</strong></p></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='12%' align='left' valign='middle' class='txt'>Dubai : </td>
                            <td width='25%' height='50' align='left' valign='middle'><select name='select7' class='input' size:width='200' >
                                <option>- select -</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                              </select>
                              days</td>
                            <td width='63%' align='left' valign='middle' class='txt'>If you wish to make a stopover in Dubai</td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle' class='txt'>Male : </td>
                            <td height='50' align='left' valign='middle'><select name='select8' class='input' size:width='200' >
                                <option>- select -</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                              </select>
                              days </td>
                            <td align='left' valign='middle' class='txt'>If you wish to make a stopover in Male</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height='30' align='left' valign='top' class='txt'><p><strong>Choose the accommodation that you according to your wish and budget</strong></p></td>
                    </tr>
                    <tr>
                      <td height='30' align='left' valign='top'>Preferred Hotel Category : </td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='11%' align='left' valign='middle'>Star Hotals : </td>
                            <td width='26%' align='left' valign='middle' class='txt'><input type='checkbox' name='checkbox' value='checkbox' />
                              1*
                              <input type='checkbox' name='checkbox2' value='checkbox' />
                              2*
                              <input type='checkbox' name='checkbox3' value='checkbox' />
                              3*
                              <input type='checkbox' name='checkbox4' value='checkbox' />
                              4*
                              <input type='checkbox' name='checkbox5' value='checkbox' />
                              5*</td>
                            <td width='63%' height='35' align='left' valign='middle'><select name='select9' class='input' style='width:200px'>
                                <option>- select -</option>
                                <option>Boutique Hotel</option>
                                <option>Colonial Bungalows</option>
                                <option>Guest Houses</option>
                                <option>Eco Lodge</option>
                                <option>Appartments</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle'>&nbsp;</td>
                            <td align='left' valign='middle' class='txt'>&nbsp;</td>
                            <td height='19' align='left' valign='middle'>&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='25%' height='25' align='left' valign='top' class='txt'>Prefered Meal Plan</td>
                            <td width='24%' height='25' align='left' valign='top' class='txt'>Rooms :</td>
                            <td width='26%' height='30' align='left' valign='top'class='txt'>Children in separate Room : </td>
                            <td width='25%' height='30' align='left' valign='top'class='txt'>Requirement of Baby Cot : </td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle'><select name='select10' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>B/B</option>
                                <option>H/B</option>
                                <option>F/B</option>
                                <option>All Inclusive </option>
                            </select></td>
                            <td height='25' align='left' valign='middle'><select name='select11' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Double room sharing</option>
                                <option>Single room</option>
                                <option>Triple room</option>
                                <option>Family Room</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select12' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select13' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height='30' colspan='4' align='left' valign='middle' class='txt'>(For Round tours we provide B/B, and H/B)</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height='30' align='left' valign='middle' class='txt'><p><strong>Nature  Based: Nature Parks</strong></p></td>
                    </tr>
                    <tr>
                      <td height='30' align='left' valign='top'><p>Adventure :</p></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='25%' height='25' align='left' valign='top' class='txt'> Land  Based : </td>
                            <td width='24%' height='25' align='left' valign='top' class='txt'> Water  Based : </td>
                            <td width='26%' height='30' align='left' valign='top'class='txt'>Air  Based : </td>
                            <td width='25%' height='30' align='left' valign='top'class='txt'>Courses : </td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle'><select name='select14' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Trecking</option>
                                <option>Hiking</option>
                                <option>Camping</option>
                                <option>Bird Watching</option>
                                <option>Jeep Safari (Yala National Park/Minneriya National Park)</option>
                            </select></td>
                            <td height='25' align='left' valign='middle'><select name='select14' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>White Water Rafting</option>
                                <option>Canoeing</option>
                                <option>Surfing</option>
                                <option>SCUBA Diving</option>
                                <option>Snorkling</option>
                                <option>Jet Sking</option>
                                <option>Whale/Dolphin Watching</option>
                                <option>Recreational Fishing</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select14' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Hot Air Ballooning</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select14' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Scuba Diving</option>
                                <option>Surfing</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height='19' colspan='4' align='left' valign='middle' class='txt'>&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='25%' height='25' align='left' valign='top' class='txt'>Archaeological sites : </td>
                            <td width='24%' height='25' align='left' valign='top' class='txt'>Religious : </td>
                            <td width='26%' height='30' align='left' valign='top'class='txt'>Spiritual : </td>
                            <td width='25%' height='30' align='left' valign='top'class='txt'>Physical Well Being : </td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle'><select name='select15' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Anuradhapura</option>
                                <option>Polonnaruwa</option>
                                <option>Dambulla Rock Temple</option>
                                <option>Sigiriya</option>
                                <option>Alu Vihara Cave Temple</option>
                                <option>Mihintale, Kandy</option>
                            </select></td>
                            <td height='25' align='left' valign='middle'><select name='select15' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Hindu temple</option>
                                <option>Ramayana Temples</option>
                                <option>Buddhist Temples</option>
                                <option>Christian Churches</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select15' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Meditation</option>
                                <option>Yoga</option>
                            </select></td>
                            <td align='left' valign='middle'><select name='select15' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>Ayurveda Treatments</option>
                                <option>Ayurveda massage</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height='19' colspan='4' align='left' valign='middle' class='txt'>&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                            <td width='25%' height='25' align='left' valign='top' class='txt'>Preferred Tour guide&nbsp;  : </td>
                            <td width='24%' height='25' align='left' valign='top' class='txt'><select name='select16' class='input' style='width:200px'>
                                <option selected='selected'>- select -</option>
                                <option>English</option>
                                <option>German</option>
                                <option>French</option>
                                <option>Italian</option>
                            </select></td>
                            <td width='26%' height='30' align='left' valign='top'class='txt'>&nbsp;</td>
                            <td width='25%' height='30' align='left' valign='top'class='txt'>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align='left' valign='middle'>&nbsp;</td>
                            <td height='25' align='left' valign='middle'>&nbsp;</td>
                            <td align='left' valign='middle'>&nbsp;</td>
                            <td align='left' valign='middle'>&nbsp;</td>
                          </tr>
                          <tr>
                            <td height='19' colspan='4' align='left' valign='top' class='txt'><div align='justify'>If  a passenger has any physical disabilities requiring special  attention/arrangements to be made please give details specifying the kind of  special arrangements to be made at destination hotel/s and in vehicle.<br />
                                    <br />
                              Food  allergies if any should be provided in detail in order to advise hotel/s.<br />
                              <br />
                            </div></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height='57' align='left' valign='middle'><textarea name='textarea3' cols='70' class='textarea'></textarea></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><p align='justify'><br />
                        ANY OTHER INFORMATION YOU COULD PROVIDE THAT MIGHT HELP US MAKE YOUR  STAY AT CHOSEN DESTINATION/S AND OR COUNTRIES MORE COMFORTABLE<br />
                      </p></td>
                    </tr>
                    <tr>
                      <td align='left' valign='top'><textarea name='textarea4' cols='70' class='textarea'></textarea></td>
                    </tr>
                    <tr>
                      <td height='40' align='center' valign='middle'><button name='reg' onclick='return reg_vali();' type='submit' class='submit button'>Submit</button></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table>";

	$row = mysql_fetch_array($selectResult);
	$tour_name				=		$row['tour_name'];

	$argFromEmailAddress	=	'noreply@swisstravels.com';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'noreply@swisstravels.com';
	$argSubject				=	"Looking for this package details -". $tour_name;
	$argMessage				=	$mail_content;


	$argUserSubject				=	"Package Details Enquiry  -". $tour_name;
	$argUserMessage				=	"You Will be contacted regarding this package details - $tour_name soon "; 

	$argFromEmailAddress	= preg_replace("/\n/", "", $argFromEmailAddress);
	$argReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheaders				.= "MIME-Version: 1.0\n";
	$funheaders				.= "Content-type: text/html\n";
	$funheaders				.= "From: ".$argFromEmailAddress."\n";
	$funheaders				.= "Reply-To: ".$argReplyToEmailAddress."\n";
	$funheaders				.= "Return-Path: noreply@swisstravels.com\n";
	$funheaders				.= "Sender: info@swisstravels.com\n";
	$argheaders				= $funheaders;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);

	if (mail($argToEmailAddress, $argUserSubject, $argUserMessage, $argheaders)) { $funValue = 'yes'; }//if
	
	$argFromEmailAddress	=	'admin@swisstravels.com';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'admin@swisstravels.com';
	
	$argAdminFromEmailAddress		= preg_replace("/\n/", "", $argFromEmailAddress);
	$argAdminReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheadersAdmin				.= "MIME-Version: 1.0\n";
	$funheadersAdmin				.= "Content-type: text/html\n";
	$funheadersAdmin				.= "From: " .$argAdminFromEmailAddress."\n";
	$funheadersAdmin				.= "Reply-To: ".$argAdminReplyToEmailAddress."\n";
	$funheadersAdmin				.= "Return-Path: admin@swisstravels.com\n";
	$funheadersAdmin				.= "Sender: admin@swisstravels.com\n";
	$argheadersAdmin				= $funheadersAdmin;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);
	
	//echo $argToEmailAddress."<br>".$argSubject."<br>".$argMessage."<br>".$argheadersAdmin;
	if (mail($argToEmailAddress, $argSubject, $argMessage, $argheadersAdmin)) { $funValue = 'yes'; }//if

}


$selectCount	=	"SELECT * from ".TABLE_PLAN." WHERE plan_status = '1' AND tour_id = '$tour_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
				$front_order	=	1;
				while($row = mysql_fetch_array($selectResult)) {
					$tour_id				=		$row['tour_id'];
					$thumb_path				=		$row['thumb_path'];
					$thumb_path1			=		$row['thumb_path1'];
					$thumb_path2			=		$row['thumb_path2'];
					$tour_desc				=		$row['tour_desc'];
					$product_services		=		$row['product_services'];
					$touring				=		$row['touring'];
					$tour_name				=		$row['tour_name'];
					$tour_cost				=		$row['tour_cost'];

?>

<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/popup_open.js"></script>
<link href="css/popup_open.css" rel="stylesheet" type="text/css" />

  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><img src="images/wightlin.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><img src="images/banner.jpg" width="990" height="252" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>SriLanka</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="76" align="left" valign="top"><div align="justify">
              <p><strong>Tour Enquiries</strong><br />
                Welcome to  Swiss Travels holiday price enquiry. As soon as we receive your request we  check the best price and our holidays are guaranteed to be value for your money  and lower than any other tour operators. Please complete the enquiry form below  to get a no obligation quote. If you do not receive within 5 working days any  communication from our team please contact us on (+41) 062 752 00 11. There  might have been a technical error during the submission of your form              </p>
              </div></td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div class="dbgg">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Departure  date</strong></td>
                  <td width="24%" align="left" valign="middle"><strong>Return  date</strong></td>
                  <td width="26%" align="left" valign="middle"><strong>Travel  flexibility</strong></td>
                  <td width="25%" align="left" valign="middle"><strong>Preferred  Airport</strong></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><input type="text" name="deptdate" id="deptdate" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="retdate" id="retdate" size="25" class="input" /></td>
                  <td align="left" valign="middle"><select name="traflex" id="traflex" class="input" style="width:200px">
                      <option value='' selected="selected">- select -</option>
                      <option>Not Flexible</option>
                      <option>-1+1</option>
                      <option>-2+2</option>
                  </select></td>
                  <td align="left" valign="middle"><select name="select2" class="input" style="width:200px">
                      <option selected="selected">- select -</option>
                      <option>Z&uuml;rich</option>
                      <option>Basel </option>
                      <option>Geneva</option>
                      <option>Frankfurt</option>
                      <option>Milano</option>
                  </select></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Contact Details</strong></td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="24%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="26%" align="left" valign="middle"class="txt">Telephone No : </td>
                  <td width="25%" align="left" valign="middle"class="txt">Mobile No : </td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="top"><input type="text" name="textfield3" size="25" class="input" />                  </td>
                  <td align="left" valign="top"><input type="text" name="textfield22" size="25" class="input" /></td>
                  <td align="left" valign="middle"><label>
                    <input type="text" name="textfield42" size="25" class="input" />
                  </label></td>
                  <td align="left" valign="top"><input type="text" name="textfield4" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td height="29" align="left" valign="middle"><p>E-Mail Id :</p></td>
                  <td align="left" valign="middle">Re-enter e-mail address : </td>
                  <td align="left" valign="middle">Address : </td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="top"><input type="text" name="textfield5" size="25" class="input" /></td>
                  <td align="left" valign="top"><input type="text" name="textfield6" size="25" class="input" /></td>
                  <td align="left" valign="middle"><textarea name="textarea" cols="15" class="input"></textarea></td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Passenger</strong></td>
                  <td width="24%" align="left" valign="middle"><strong>Adult  (+12)</strong></td>
                  <td width="26%" align="left" valign="middle"><strong>Children  (Age 2-11)</strong></td>
                  <td width="25%" align="left" valign="middle"><strong>Infant  (under 2 years)</strong></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle"><input type="text" name="textfield23" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield232" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield233" size="25" class="input" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 1 </td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">&nbsp;</td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="26%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="25%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><select name="select3" class="input" style="width:200px">
                    <option selected="selected">- select -</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                                    </select></td>
                  <td height="25" align="left" valign="middle"><input type="text" name="textfield84" size="25" class="input" />                  </td>
                  <td align="left" valign="middle"><input type="text" name="textfield822" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield832" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 2 </td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">&nbsp;</td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="26%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="25%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><select name="select4" class="input" style="width:200px">
                      <option selected="selected">- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height="25" align="left" valign="middle"><input type="text" name="textfield842" size="25" class="input" />                  </td>
                  <td align="left" valign="middle"><input type="text" name="textfield8222" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield8322" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger </strong>3</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">&nbsp;</td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="26%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="25%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><select name="select5" class="input" style="width:200px">
                      <option selected="selected">- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height="25" align="left" valign="middle"><input type="text" name="textfield8422" size="25" class="input" />                  </td>
                  <td align="left" valign="middle"><input type="text" name="textfield82222" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield83222" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger </strong>4</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">&nbsp;</td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="26%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="25%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><select name="select6" class="input" style="width:200px">
                      <option selected="selected">- select -</option>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                  </select></td>
                  <td height="25" align="left" valign="middle"><input type="text" name="textfield84222" size="25" class="input" />                  </td>
                  <td align="left" valign="middle"><input type="text" name="textfield822222" size="25" class="input" /></td>
                  <td align="left" valign="middle"><input type="text" name="textfield832222" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt"><p><strong>Add more passengers</strong></p></td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><p><strong>Special Wishes &amp;  rem.</strong></p></td>
                  <td width="26%" align="left" valign="middle"class="txt">&nbsp;</td>
                  <td width="25%" align="left" valign="middle"class="txt">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top"><input type="text" name="textfield8422222" size="25" class="input" /></td>
                  <td height="25" colspan="3" align="left" valign="middle"><textarea name="textarea2" cols="70" class="textarea"></textarea></td>
                  </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="rtxtr"><strong>Plan My Tour</strong></td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="txt">Main Destination</td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="30" align="left" valign="top" class="rtxtr">Srilanka</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="12%" align="left" valign="top" class="txt">No of Days :</td>
                            <td width="23%" align="left" valign="top"><input type="text" name="textfield842222" size="25" class="input" /></td>
                            <td width="46%" align="left" valign="top" class="txt">Of which how many days would you like to spend  at a beach location : </td>
                            <td width="19%" align="left" valign="top"><input type="text" name="textfield8422223" size="25" class="input" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top" class="txt"><p><strong>Add another country to your tour: you can add Dubai or/and Male to your  tour</strong></p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="12%" align="left" valign="middle" class="txt">Dubai : </td>
                            <td width="25%" height="50" align="left" valign="middle"><select name="select7" class="input" size:width="200" >
                                <option>- select -</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                              </select>
                              days</td>
                            <td width="63%" align="left" valign="middle" class="txt">If you wish to make a stopover in Dubai</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle" class="txt">Male : </td>
                            <td height="50" align="left" valign="middle"><select name="select8" class="input" size:width="200" >
                                <option>- select -</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                              </select>
                              days </td>
                            <td align="left" valign="middle" class="txt">If you wish to make a stopover in Male</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top" class="txt"><p><strong>Choose the accommodation that you according to your wish and budget</strong></p></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top">Preferred Hotel Category : </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="11%" align="left" valign="middle">Star Hotals : </td>
                            <td width="26%" align="left" valign="middle" class="txt"><input type="checkbox" name="checkbox" value="checkbox" />
                              1*
                              <input type="checkbox" name="checkbox2" value="checkbox" />
                              2*
                              <input type="checkbox" name="checkbox3" value="checkbox" />
                              3*
                              <input type="checkbox" name="checkbox4" value="checkbox" />
                              4*
                              <input type="checkbox" name="checkbox5" value="checkbox" />
                              5*</td>
                            <td width="63%" height="35" align="left" valign="middle"><select name="select9" class="input" style="width:200px">
                                <option>- select -</option>
                                <option>Boutique Hotel</option>
                                <option>Colonial Bungalows</option>
                                <option>Guest Houses</option>
                                <option>Eco Lodge</option>
                                <option>Appartments</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle" class="txt">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Prefered Meal Plan</td>
                            <td width="24%" height="25" align="left" valign="top" class="txt">Rooms :</td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Children in separate Room : </td>
                            <td width="25%" height="30" align="left" valign="top"class="txt">Requirement of Baby Cot : </td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><select name="select10" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>B/B</option>
                                <option>H/B</option>
                                <option>F/B</option>
                                <option>All Inclusive </option>
                            </select></td>
                            <td height="25" align="left" valign="middle"><select name="select11" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Double room sharing</option>
                                <option>Single room</option>
                                <option>Triple room</option>
                                <option>Family Room</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select12" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select13" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height="30" colspan="4" align="left" valign="middle" class="txt">(For Round tours we provide B/B, and H/B)</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="middle" class="txt"><p><strong>Nature  Based: Nature Parks</strong></p></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top"><p>Adventure :</p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt"> Land  Based : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt"> Water  Based : </td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Air  Based : </td>
                            <td width="25%" height="30" align="left" valign="top"class="txt">Courses : </td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><select name="select14" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Trecking</option>
                                <option>Hiking</option>
                                <option>Camping</option>
                                <option>Bird Watching</option>
                                <option>Jeep Safari (Yala National Park/Minneriya National Park)</option>
                            </select></td>
                            <td height="25" align="left" valign="middle"><select name="select14" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>White Water Rafting</option>
                                <option>Canoeing</option>
                                <option>Surfing</option>
                                <option>SCUBA Diving</option>
                                <option>Snorkling</option>
                                <option>Jet Sking</option>
                                <option>Whale/Dolphin Watching</option>
                                <option>Recreational Fishing</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select14" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Hot Air Ballooning</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select14" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Scuba Diving</option>
                                <option>Surfing</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="middle" class="txt">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Archaeological sites : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt">Religious : </td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Spiritual : </td>
                            <td width="25%" height="30" align="left" valign="top"class="txt">Physical Well Being : </td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><select name="select15" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Anuradhapura</option>
                                <option>Polonnaruwa</option>
                                <option>Dambulla Rock Temple</option>
                                <option>Sigiriya</option>
                                <option>Alu Vihara Cave Temple</option>
                                <option>Mihintale, Kandy</option>
                            </select></td>
                            <td height="25" align="left" valign="middle"><select name="select15" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Hindu temple</option>
                                <option>Ramayana Temples</option>
                                <option>Buddhist Temples</option>
                                <option>Christian Churches</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select15" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Meditation</option>
                                <option>Yoga</option>
                            </select></td>
                            <td align="left" valign="middle"><select name="select15" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>Ayurveda Treatments</option>
                                <option>Ayurveda massage</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="middle" class="txt">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Preferred Tour guide&nbsp;  : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt"><select name="select16" class="input" style="width:200px">
                                <option selected="selected">- select -</option>
                                <option>English</option>
                                <option>German</option>
                                <option>French</option>
                                <option>Italian</option>
                            </select></td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">&nbsp;</td>
                            <td width="25%" height="30" align="left" valign="top"class="txt">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="25" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="top" class="txt"><div align="justify">If  a passenger has any physical disabilities requiring special  attention/arrangements to be made please give details specifying the kind of  special arrangements to be made at destination hotel/s and in vehicle.<br />
                                    <br />
                              Food  allergies if any should be provided in detail in order to advise hotel/s.<br />
                              <br />
                            </div></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="57" align="left" valign="middle"><textarea name="textarea3" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><p align="justify"><br />
                        ANY OTHER INFORMATION YOU COULD PROVIDE THAT MIGHT HELP US MAKE YOUR  STAY AT CHOSEN DESTINATION/S AND OR COUNTRIES MORE COMFORTABLE<br />
                      </p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><textarea name="textarea4" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td height="40" align="center" valign="middle"><button name="reg" onclick="return reg_vali();" type="submit" class="submit button">Submit</button></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
   
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
     
      
    </table></td>
  </tr>
  
   <?php include 'footer.php'; ?>