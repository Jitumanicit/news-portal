<?php
if (!defined('BASEPATH')) 
{
    exit('No direct script access allowed');
}

class Assam extends CI_Controller
{
    public function index()
    {      
      $postty = "";
	  $data['result']      =  $this->Commonmodel->getcategory('category',$postty);	 
	  foreach($data['result'] as $val)
	  {	     
		 $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		 for($i=0;$i<count($data1['results']);$i++)
		 {			
			$b[] = $data1['results'][$i];			
		 }		
	  }	
	 
	  $a="";
	  $c="";
	  $data['result2']           =  $b;	  
	  //$data['Latest']            =  $this->Commonmodel->breakingnews('post_news',5,'id');	  
	  //$data['Hot']               =  $this->Commonmodel->hottrending('post_news',12,'id');	  
	  $data['Latest']            =  $this->Commonmodel->getDataState('post_news',0,5,'id','Assam'); 
	  $data['Hot']               =  $this->Commonmodel->getDataState('post_news',6,12,'id','Assam');
	  /*$data['Sport']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Sports',$postty,'Assam');	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Politics',$postty,'Assam');      
	  $data['Business']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Business',$postty,'Assam');	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatasState('post_news',3,'Entertainment',$postty,'Assam'); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatasState('post_news',3,'Law',$postty,'Assam');	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Lifestyle',$postty,'Assam');
	  $data['Technology']        =  $this->Commonmodel->getWhereDatasState('post_news',3,'Technology',$postty,'Assam');
	  $data['Other']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Other',$postty,'Assam');	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Education',$postty,'Assam'); 
	  $data['Crime']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Crime',$postty,'Assam');	*/ 
	  $data['center']             =  $this->Commonmodel->getDataState('post_news',13,3,'id','Assam');	  
	  $data['center1']            =  $this->Commonmodel->getDataState('post_news',16,3,'id','Assam');	  
	  $data['center2']            =  $this->Commonmodel->getDataState('post_news',19,3,'id','Assam');
	  $data['center21']            =  $this->Commonmodel->getDataState('post_news',22,3,'id','Assam');	  
	  $data['center22']            =  $this->Commonmodel->getDataState('post_news',25,3,'id','Assam');	  
	  $data['center23']            =  $this->Commonmodel->getDataState('post_news',28,3,'id','Assam');	  
	  $data['center24']            =  $this->Commonmodel->getDataState('post_news',31,3,'id','Assam');	
	  $data['center25']            =  $this->Commonmodel->getDataState('post_news',34,3,'id','Assam');	  
	  $data['center26']            =  $this->Commonmodel->getDataState('post_news',37,3,'id','Assam');	  
	  $data['center27']            =  $this->Commonmodel->getDataState('post_news',40,3,'id','Assam');
	  $data['Video']             =  $this->Commonmodel->getAllRecord('post_news','Video',4,$a,$c);
      $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
      $data['advertiseCenter']   =  $this->Commonmodel->getAdvertiseData("advertise","Center");
	  $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
      $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");
	  $data['path']              =   '../uploads/images/';      
	  //$data['metaKeyword']       =  "assamese news, assam india, news live assam, assam news today, latest news of assam, current news assam, assam destinations, assam political news, assamese news online, news live assam today, assam online, guwahati news";
	  //$data['metaTitle']         =  "Assam: Newsner Breaking news, Latest Local Assam news headlines, Live news updates";   
	  $data['metaKeyword']       =  "newsner assam, assamese news, assam news live, assam news today, latest news of assam, current news assam, assam destinations, assam political news, assam breaking news, assamese news online, news live assam today, assam online, guwahati news, North East News Assam India"; 
	  //$data['metaTitle']         =  "Assam: Newsner Breaking News, Latest Local Assam News Headlines, Live Assamese News Updates, North East News Assam India";
	 // $data['description']       =  "Get Newsner Breaking News, Latest Local Assam News Headlines, Northeast News Assam India, Live Assamese News Updates on Politics, Business, Sports, Lifestyle, Travel from Assam and India.";
	 $data['metaTitle']         =  "Assam : Live & Breaking News from Assam, Latest Photos, Videos, North East News";
     $data['description']       =  "Get live and latest breaking news on Assam. Todays current affairs, Assam local news, business, crime, education, politics, health entertainment, travel, sports, lifestyle, tourism and more at North east Newsner.";
	  //$data['rssfeed']           =  $this->Commonmodel->getRssDatas('rssfeeds',$postty);	 
      //print_r($data['Hot']);
	  $this->load->view('newsstate',$data);

    }
		
	
	public function Business()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Business',$id,'Assam');		   
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Assam'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		   $data['metaKeyword']     =  "Guwahati latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news on assam economy, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Today's Business News Headlines, Economic News, Share Market, North East News Assam India- Newsner";
		   if(count($data['result'])==0)
		   {
		       $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		   
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Business',$postty,'Assam');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Assam'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Guwahati latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news on assam economy, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Today's Business News Headlines, Economic News, Share Market, North East News Assam India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}	
	
	public function LatestNews()
    {        
		$postty="";
		$id=$this->uri->segment(3);
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		
		//$this->Commonmodel->getWhereDatas('post_news',8,'Business',$postty,'Assam');
		//$data['results']          =  $this->Commonmodel->getDatasState('post_news',8,'Assam');       
        $data['results']          =  $this->Commonmodel->getuniquestate($id,8,'Assam');
        //$data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$id,$postty);	
		$data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
	    $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	   
		foreach($data['result1'] as $val)
	    {	     
		  $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		  for($i=0;$i<count($data1['results']);$i++)
		  {			
			$b[] = $data1['results'][$i];			
		  }		
	    }	  
	    $data['result2']=$b;	   
		$data['metaKeyword']     =  "";	 
	    $data['metaTitle']     =  "";	
		if(count($data['result'])==0)
		{
		   $this->load->view('errors'); 	
		}
        else
		{		   
		   $this->load->view('singleNews-state',$data); 
		} 	 
    }	
    	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);
		$data['results']          =  $this->Commonmodel->getData('subcategory',15,'id');
		$data['result1']          =  $this->Commonmodel->getcategory('category',$postty);
		$data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	   
	    foreach($data['result1'] as $val)
	    {	     
		   $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		   for($i=0;$i<count($data1['results']);$i++)
		   {			
			 $b[] = $data1['results'][$i];			
		   }		
	    }	  
	    $data['result2']=$b;
	    $data['metaKeyword']     =  "";	 
	    $data['metaTitle']     =  "";			   
		if(count($data['result'])==0)
		{
		   $this->load->view('errors'); 	
		}
        else
		{		   
		   $this->load->view('singleNews-state',$data); 
		} 	
    }	
	
	
	public function Category()
    {    
      $Category = $this->uri->segment(3);
	  /*if($this->uri->segment(3)!='')
	   {	
           $id = $this->uri->segment(3);		  
		   $postty = "";		   
		   $data['result1']     =  $this->Commonmodel->getcategory('category',$postty); 
	       foreach($data['result1'] as $val)
	       {	     
		     $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		     for($i=0;$i<count($data1['results']);$i++)
		     {			
			    $b[] = $data1['results'][$i];			
		     }		
	       }	  
	       $data['result2']          =  $b;		   
		   $data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   
		   $data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$Category,$postty);		   
		   $data['Video']            =  $this->Commonmodel->getWhereData('post_news',4,$Category,'Video');
		   
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   $data['metaKeyword']       =  "";
		   $data['metaTitle']         =  "";		   
		   // print_r($data['results']);

		  $this->load->view('singleNews-state',$data);   
       }
	   else
	   {
	     */
		   $postty = "";
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']           =  $this->Commonmodel->getWhereDatasState('post_news',10,$Category,$postty,$this->uri->segment(1));
		   $data['Video']             =  $this->Commonmodel->getWhereDatasState('post_news',4,$Category,'Video',$this->uri->segment(1));		   
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  if($Category=='business')
		  {	  
		     $data['metaKeyword']   =  "Guwahati latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news on assam economy, North East News Assam India";
		     $data['metaTitle']     =  "Assam: Today's Business News Headlines, Economic News, Share Market, North East News Assam India- Newsner";		    
		     $data['description']   =  "Read all the latest business news and updates on Assam only on NewsNER India.Today's business news headlines online on Assam today.";
		  }
		  else if($Category=='entertainment')
		  {
             $data['metaKeyword']   =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Assamese, showbiz news, local entertainment news, entertainment news, North East News Assam India";
		     $data['metaTitle']     =  "Assam: Latest Assamese Entertainment, Film Industry News Headlines & Live Updates, North East News Assam India- Newsner";
		     $data['description']   =  "Read all the latest entertainment news and updates on Assam only on NewsNER India. Today's entertainment news headlines online on Assam today.";
		  }
		  else if($Category=='politics')
		  {
             $data['metaKeyword']  = "Parliament news assam, regional political news,current affairs, Politics news,latest politics news online, politics news live guwahati, politics current news, recent political news, North East News Assam India";
		     $data['metaTitle']    = "Assam: Latest Local Political News Headlines & Live Updates Assam, North East News Assam India- Newsner";
		     $data['description']  = "Read all the latest political news and updates on Assam only on NewsNER India. Today's political news headlines online on Assam today.";
		  }
		  else if($Category=='technology')
		  {
             $data['metaKeyword']   =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Assam, Guwahati IT Hub,  Northeast Discover or invented technology, North East News Assam India";
		     $data['metaTitle']     =  "Assam: Latest Science & Technology News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";
             $data['description']   =  "Read all the latest technology news and updates on Assam only on NewsNER India. Today's technology news headlines online on Assam today.";
          }
		  else if($Category=='sports')
		  {
             $data['metaKeyword']   =  "Assam, Jorhat, Dibrugarh live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Assam Football, sports club, North East News Assam India";
		     $data['metaTitle']     =  "Assam: Latest Local Sports News Headlines & Live Updates Assam, North East News Assam India- Newsner";
		     $data['description']   =  "Read all the latest sports news and updates on Assam only on NewsNER India. Today's sports news headlines online on Assam today.";
		  }
		  else if($Category=='law')
		  {
             $data['metaKeyword']   =  "Latest Legal news today, top breaking news in assam, current affairs online, trending news on laws & legal, Law Firms news, Law corner news, Justice, Guwahati High Court, North East News Assam India";
		     $data['metaTitle']     =  "Assam: Latest Law Criminal, Justice News Headlines & Live Updates, North East News Assam India- Newsner";
             $data['description']   =  "Read all the latest law & legal news and updates on Assam only on NewsNER India. Today's law & legal news headlines online on Assam today.";
          }
		  else if($Category=='crime')
		  {
             $data['metaKeyword']    =  "Assam top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Guwahati high court, Law corner news, photos, videos, violence news, northeast crime news, jail, protest, army, North East News Assam India";
		     $data['metaTitle']      =  "Assam: Latest crime news headlines & Live updates , Assam state criminal news, Guwahati law & legal news, North East News Assam India- Newsner";	
		     $data['description']    =  "Read all the latest crime news and updates on Assam only on NewsNER India. Today's crime news headlines online on Assam today.";
		  }
		  else if($Category=='weather')
		  {
			 $data['metaKeyword']    =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Assam climate, Guwahati weather forecast, North East News Assam India";
		     $data['metaTitle']      =  "Assam: Latest Weather forecast News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";
		     $data['description']    =  "Read all the latest weather forecast news and updates on Assam only on NewsNER India. Today's weather forecast news headlines online on Assam today.";
		  }
		  else if($Category=='education')
		  {
		     $data['metaKeyword']    =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs assam, schools and colleges in Guwahati, Dibrugarh, Tezpur, North East News Assam India";
		     $data['metaTitle']      =  "Assam: Latest educational news headlines & Live updates, Educational Institutes, North East News Assam India - Newsner";
		     $data['description']    =  "Read all the latest education news and updates on Assam only on NewsNER India. Today's education news headlines online on Assam today.";
		  }
		  else if($Category=='lifestyle')
		  {
			  $data['metaKeyword']   =  "Health & Fitness news, Assam Monastery tour news, Kaziranga Travel & Tourism, top travel news in Northeast, top breaking news, Assamese News, local food news, Traditional culture, Assamese cuisine, North East News Assam India";
		      $data['metaTitle']     =  "Assam: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Assam India- Newsner";
		      $data['description']   =  "Read all the latest lifestyle & fashion news and updates on Assam only on NewsNER India. Today's lifestyle & fashion news headlines online on Assam today.";
		  }
		  else if($Category=='other')
		  {
			 $data['metaKeyword']    =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Assam India";
		     $data['metaTitle']      =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Assam India";
	         $data['description']    =  "Read all the latest other news and updates on Assam only on NewsNER India. Today's other news headlines online on Assam today.";
	      }
		  else if($Category=='health')
		  {
			 $data['metaKeyword']    =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News Assam India";
		     $data['metaTitle']      =  "Newsner: Health news, Health & Fitness news, North East News Assam India- Newsner";
		     $data['description']    =  "Read all the latest health news and updates on Assam only on NewsNER India. Today's health news headlines online on Assam today.";
		  }
          else if($Category=='travel')
		  {
			  $data['metaKeyword']   =  "Assam travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Dibrugarh, Medical colleges, latest medical news, travel issue Guwahati, travel spots in assam, North East News Assam India";
		      $data['metaTitle']     =  "Assam: Latest travel news headlines & Live updates news, Travel news Guwahati, North East News Assam India- Newsner";
		      $data['description']   =  "Read all the latest travel news and updates on Assam only on NewsNER India. Today's travel news headlines online on Assam today.";
		  }
		  else
		  {
			 $data['metaKeyword']   =  ""; 
			 $data['metaTitle']     =  "";
			 $data['description']   =  ""; 
		  }			
		 $this->load->view('CategoryNews-state',$data); 		 
	   //} 	  
	}	

    public function Entertainment()
    { 
      if($this->uri->segment(3)!='')
	  {	
           $id = $this->uri->segment(3);
		   $postty                   =  "";		   
		   $data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereDatassState('post_news',10,'Entertainment',$id,'Assam');	
		   $data['Video']            =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Assam');
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		   $data['metaKeyword']      =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Assamese, showbiz news, local entertainment news, entertainment news, North East News Assam India";
		   $data['metaTitle']        =  "Assam: Latest Assamese Entertainment, Film Industry News Headlines & Live Updates, North East News Assam India- Newsner";		   
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		
      }
	  else
	  {		
		   $postty                  =  "";
		   $Category                = $this->uri->segment(2);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Entertainment',$postty,'Assam');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Assam'); 		   
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      		   
		   $data['metaKeyword']      =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Assamese, showbiz news, local entertainment news, entertainment news, North East News Assam India";
		   $data['metaTitle']        =  "Assam: Latest Assamese Entertainment, Film Industry News Headlines & Live Updates, North East News Assam India- Newsner";	
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 	
	}
  
    public function Politics()
    { 	
	   if($this->uri->segment(3)!='')
	   {	
          $id = $this->uri->segment(3); 
          $postty                  = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Politics',$id,'Assam');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Assam'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news,latest politics news online, politics news live guwahati, politics current news, recent political news, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Local Political News Headlines & Live Updates Assam, North East News Assam India- Newsner";		  
		  if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		
       }
	   else
	   {		
		  $postty = "";		
		  $Category = $this->uri->segment(2);		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Politics',$postty,'Assam');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Assam'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news,latest politics news online, politics news live guwahati, politics current news, recent political news, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Local Political News Headlines & Live Updates Assam, North East News Assam India- Newsner";		  
		  $data['description']     =  "";		  
		  $this->load->view('CategoryNews-state',$data); 
	   }		
    }		
		
	
    public function Technology()
    { 
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3); 
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Technology',$id,'Assam');          
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Assam'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	 
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Assam, Guwahati IT Hub,  Northeast Discover or invented technology, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Science & Technology News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";
		  if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		
	   }
	   else
	   {	
          $postty = "";   
		  $Category = $this->uri->segment(2);
		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Technology',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Assam');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Assam, Guwahati IT Hub,  Northeast Discover or invented technology, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Science & Technology News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 
    }	
	
    public function Sports()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";   
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Sports',$id,'Assam');		 
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Assam'); 	  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "Assam, Jorhat, Dibrugarh live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Assam Football, sports club, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Local Sports News Headlines & Live Updates Assam, North East News Assam India- Newsner";		  
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		
       }
	   else
	   {		
		  $postty = "";   
		  $Category = $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Sports',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Assam');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Assam, Jorhat, Dibrugarh live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Assam Football, sports club, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Local Sports News Headlines & Live Updates Assam, North East News Assam India- Newsner";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 
    }
	
		
	public function Law()
    {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Law',$id,'Assam');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Assam');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news in assam, current affairs online, trending news on laws & legal, Law Firms news, Law corner news, Justice, Guwahati High Court, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Law Criminal, Justice News Headlines & Live Updates, North East News Assam India- Newsner";
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		 
       }
	   else
	   {		
		  $postty = ""; 
		  $Category    = $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Law',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Assam'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news in assam, current affairs online, trending news on laws & legal, Law Firms news, Law corner news, Justice, Guwahati High Court, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Law Criminal, Justice News Headlines & Live Updates, North East News Assam India- Newsner";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}

     public function Crime()
     {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Crime',$id,'Assam');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Assam');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Assam top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Guwahati high court, Law corner news, photos, videos, violence news, northeast crime news, jail, protest, army, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest crime news headlines & Live updates , Assam state criminal news, Guwahati law & legal news, North East News Assam India- Newsner";			  
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		  
       }
	   else
	   {		
		  $postty                  =  ""; 
		  $Category                =  $this->uri->segment(2);		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Crime',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Assam'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Assam top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Guwahati high court, Law corner news, photos, videos, violence news, northeast crime news, jail, protest, army, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest crime news headlines & Live updates , Assam state criminal news, Guwahati law & legal news, North East News Assam India- Newsner";		  
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   }    
	}

    public function Weather()
    {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Weather',$id,'Assam');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Assam');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Assam climate, Guwahati weather forecast, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Weather forecast News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";		  
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		
       }
	   else
	   {		
		  $postty = ""; 
		  $Category                = $this->uri->segment(2);		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Weather',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Assam');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Assam climate, Guwahati weather forecast, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Weather forecast News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";		  
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   }    
	}
	
	public function Education()
    { 	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Education',$id,'Assam');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Assam');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs assam, schools and colleges in Guwahati, Dibrugarh, Tezpur, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest educational news headlines & Live updates, Educational Institutes, North East News Assam India - Newsner";         
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  }		  
       }
	   else
	   {		
		  
		  $postty = "";
		  $Category                = $this->uri->segment(2);		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Education',$postty,'Assam');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Assam');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs assam, schools and colleges in Guwahati, Dibrugarh, Tezpur, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest educational news headlines & Live updates, Educational Institutes, North East News Assam India - Newsner";		  
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}	
	
	
	public function Lifestyle()
    {	
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Lifestyle',$id,'Assam');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Assam');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "Health & Fitness news, Assam Monastery tour news, Kaziranga Travel & Tourism, top travel news in Northeast, top breaking news, Assamese News, local food news, Traditional culture, Assamese cuisine, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Assam India- Newsner";
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		  
       }
	  else
	   {		
		  $postty = "";
		  $Category                = $this->uri->segment(2);		  
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Lifestyle',$postty,'Assam');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Assam');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Health & Fitness news, Assam Monastery tour news, Kaziranga Travel & Tourism, top travel news in Northeast, top breaking news, Assamese News, local food news, Traditional culture, Assamese cuisine, North East News Assam India";
		  $data['metaTitle']       =  "Assam: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Assam India- Newsner";		  		  
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   }   
	}	
	
	
	public function Other()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";
		  $data['result1']         = $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Other',$id,'Assam');		  
		  $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Assam');			  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      	  
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Assam India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Assam India- Newsner";
		  if(count($data['result'])==0)
		  {
		      $this->load->view('errors'); 	
		  }
          else
		  {		   
		      $this->load->view('singleNews-state',$data); 
		  } 		 
       }
	   else
	   {		
		  $postty = "";
		  $Category                = $this->uri->segment(2);
		  $data['result']          = $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Other',$postty,'Assam');
          $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Assam');	 
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Assam India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Assam India- Newsner";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 
	}		
	
	
	public function Health()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		   $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Health',$id,'Assam');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Assam');		  		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	   
		   $data['metaKeyword']     =  "Assam health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics Dibrugarh, Medical colleges, latest medical news, health issue Guwahati,  health crises, hospitals in assam, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Latest health news headlines & Live updates news, Health & Medical news Guwahati, North East News Assam India- Newsner";
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		   
      }
	  else
	  {		
		   $postty = "";
		   $Category                = $this->uri->segment(2);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Health',$postty,'Assam');
           $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Assam');
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    	
		   $data['metaKeyword']     =  "Assam health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics Dibrugarh, Medical colleges, latest medical news, health issue Guwahati,  health crises, hospitals in assam, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Latest health news headlines & Live updates news, Health & Medical news Guwahati, North East News Assam India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  }
	}	
	

	public function Travel()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);		  
		   $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Travel',$id,'Assam');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Assam');		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	   
		   $data['metaKeyword']     =  "Assam travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Dibrugarh, Medical colleges, latest medical news, travel issue Guwahati, travel spots in assam, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Latest travel news headlines & Live updates news, Travel news Guwahati, North East News Assam India- Newsner";		   
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		   
      }
	  else
	  {		
		   $postty = "";
		   $Category                = $this->uri->segment(2);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Travel',$postty,'Assam');
           $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Assam');		  
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Assam travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Dibrugarh, Medical colleges, latest medical news, travel issue Guwahati, travel spots in assam, North East News Assam India";
		   $data['metaTitle']       =  "Assam: Latest travel news headlines & Live updates news, Travel news Guwahati, North East News Assam India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  }
	}	
	
	public function Video()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllVideos('post_news','Video');	   
	   $data['metaKeyword']   =  "Latest technology news viral videos, top breaking news videos Guwahati, social media viral videos in Assam, current affair videos, watch trending news, viral video news, watch celebrity news Assam watch online videos, North East News Assam India";
	   $data['metaTitle']     =  "Assam: Latest online videos, Viral videos News Headlines & Live Updates Guwahati, North East News Assam India- Newsner";	   
	   $this->load->view('Video-state',$data);	 
    }

    public function Blog()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllBlogs('post_news','Video');	   
	   $data['metaKeyword']   =  "Assam Tourism, Northeast Tourism, Northeast Travel, Meghalaya, Tour and Travel, Northeast Blog, Dawki, Shilling, Cherrapunjee, Tawang, Kaziranga National Park, Manas National Park, Gangtok, Sikkim, Arunachal, Arunachal Pradesh, Manipur, Nagaland, Ziro Festival, Hornbill Festival, IIT Guwahati, Guwahati, Meghalaya Tourism, Arunachal Tourism, Awesome Assam, Filmfare Awards 2020, newsner.in";
	   $data['metaTitle']     =  "Assam: Assam Tourism Blog, Assam Latest News, Latest Assam News- Newsner, Latest Northeast News- Newsner, Northaest Blog, Assam Tourism Blog, Welcome Assam, Welcome Northeast, newsner.in";	   
	   $this->load->view('Blog-state',$data);	 
    }	
	
 }
 