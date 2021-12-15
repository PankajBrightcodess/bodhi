<?php
class Slugs extends CI_Model
{
  var $rules;

  public function __construct()
  {
  }

  function index()
  {

    header('Content-type: text/html; charset=utf-8');
    /*
    * @var string put anything inside this string var
    */
    $string = "";
    echo $this->get_slug($string, '-');
  }


  public function get_slug($string, $seprator = '-')
  {
    $string = trim($string);
    $string = mb_strtolower($string, "UTF-8");
    $string = preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋ\s-]/u", "", $string);

    //translate if string in other language (hindi);
    $newStr = $this->translate($string);

    $newStr = preg_replace("/[\s-]+/", " ", $newStr);
    $newStr = preg_replace("/[\s_]/", $seprator, $newStr);
    //return this value
    return mb_strtolower($newStr);
  }


  public function translate($string)
  {
    //translated to english

    $this->set_rules();

    //break the string
    $strChars = $this->mbStringToArray($string);

    $newStr = "";
    $strChars = $this->joinVarnamala($strChars);
    // var_dump($strChars);
    foreach ($strChars as $key => $value) {
      if (array_key_exists($value, $this->rules)) {
        $newStr .= $this->rules[$value];
      } else {
        $newStr .= $value;
      }
    }
    return $newStr;
  }

  /* this function not used in this class */
  function mb_str_split($string)
  {
    # Split at all position not after the start: ^
    # and not before the end: $
    return preg_split('/(?<!^)(?!$)/u', $string);
  }

  /*
  *@code form stackoverflow and some modification made
*/
  function mbStringToArray($string)
  {
    $strlen = mb_strlen($string);
    while ($strlen) {
      $array[] = mb_substr($string, 0, 1, "UTF-8");
      $string = mb_substr($string, 1, $strlen, "UTF-8");
      $strlen = mb_strlen($string);
    }
    return $array;
  }

  function joinVarnamala($array)
  {
    $this->set_rules();
    $singsArray = array("ि", "्", "ो", "े", "्", "ौ", "ै", "ा", "ी", "ू", "ु");
    $out = array($array[0]);

    for ($i = 1; $i < count($array); $i++) {
      if (in_array($array[$i], $singsArray)) {
        if (array_key_exists($out[count($out) - 1] . $array[$i], $this->rules)) {
          $out[count($out) - 1] .= $array[$i];
        }
      } else {
        $out[] = $array[$i];
      }
    }
    return $out;
  }

  public function set_rules($lang = 'hi')
  {
    $this->rules = array(
      'अ' => 'a',
      'आ' => 'aa',
      'इ' => 'i',
      'ई' => 'ee',
      'उ' => 'u',
      'ऊ' => 'uu',
      'ए'  => 'e',
      'ऐ' => 'ai',
      'ओ' => 'o',
      'औ' => 'ou',
      'ऍ' => 'ei',
      'ऎ' => 'ae',
      'ऑ' => 'oi',
      'ऒ' => 'oii',
      'अं' => 'an',
      'अः' => 'aha',
      '्' => '',
      'ं' => 'n',
      'ः' => 'h',
      'ा' => 'a',
      'ि' => 'i',
      'ी' => 'ee',
      'ू' => 'oo',
      'ु' => 'u',
      'े' => 'e',
      'ै' => 'ai',
      'ौ' => 'au',
      'ो' => 'o',

      //ka character hindi
      'क' => 'Ka',
      'क्' => 'K',
      'का' => 'Kaa',
      'कि' => 'Ki',
      'कू' => 'koo',
      'कु' => 'Ku',
      'की' => 'Kee',
      'के' => 'Ke',
      'कै' => 'Kai',
      'को' => 'Ko',
      'कौ' => 'Kau',
      'कं' => 'Kan',
      'कः' => 'Kah',
      //kha character hindi
      'ख' => 'Kha',
      'ख्' => 'kh',
      'खा' => 'Khaa',
      'खि' => 'Khi',
      'खी' => 'Khee',
      'खु' => 'Khu',
      'खू' => 'Khoo',
      'खे' => 'Khe',
      'खै' => 'Khai',
      'खो' => 'Kho',
      'खौ' => 'Khau',
      'खं' => 'Khan',
      'खः' => 'khah',

      'ग' => 'Ga',
      'ग्' => 'G',
      'गा' => 'Gaa',
      'गि' => 'Gi',
      'गी' => 'Gee',
      'गु' => 'Gu',
      'गू' => 'Goo',
      'गे' => 'Ge',
      'गै' => 'Gai',
      'गो' => 'Go',
      'गौ' => 'Gau',
      'गं' => 'Gan',
      'गः' => 'Gah',
      'घ' => 'Gha',
      'घ्' => 'Gh',
      'घा' => 'Ghaa',
      'घि' => 'Ghi',
      'घी' => 'Ghee',
      'घु' => 'Ghu',
      'घू' => 'Ghoo',
      'घे' => 'Ghe',
      'घै' => 'Ghai',
      'घो' => 'Gho',
      'घौ' => 'Ghau',
      'घं' => 'Ghan',
      'घः' => 'Ghah',
      //ch character in hindi
      'च' => 'Cha',
      'चा' => 'chaa',
      'च्' => 'ch',
      'चि' => 'chi',
      'ची' => 'chee',
      'चु' => 'chu',
      'चू' => 'choo',
      'चे' => 'che',
      'चै' => 'chai',
      'चो' => 'cho',
      'चौ' => 'chau',
      'चौ' => 'chau',
      'चौ' => 'chau',
      'चं' => 'chau',
      'चः' => 'cha',

      'छ' => 'Chha',
      'छा' => 'Chhaa',
      'छि' => 'Chhi',
      'छी' => 'Chhee',
      'छु' => 'Chhu',
      'छू' => 'Chhoo',
      'छे' => 'Chhe',
      'छै' => 'Chhai',
      'छो' => 'Chho',
      'छौ' => 'Chhau',
      'छं' => 'Chhan',
      'छः' => 'Chhah',
      'छ्' => 'Chh',
      //ja  hindi character
      'ज' => 'Ja',
      'ज्' => 'J',
      'जा' => 'Jaa',
      'जि' => 'Ji',
      'जी' => 'Jee',
      'जु' => 'Ju',
      'जू' => 'Joo',
      'जे' => 'Je',
      'जै' => 'Jai',
      'जो' => 'Jo',
      'जौ' => 'Jau',
      'जं' => 'Jan',
      'जः' => 'Jah',
      //झ  hindi character
      'झ' => 'Jha',
      'झा' => 'Jhaa',
      'झ्' => 'Jh',
      'झि' => 'Jhi',
      'झी' => 'Jhee',
      'झु' => 'Jhu',
      'झू' => 'Jhoo',
      'झे' => 'Jhe',
      'झै' => 'Jhai',
      'झो' => 'Jho',
      'झौ' => 'Jhau',
      'झं' => 'Jhan',
      'झः' => 'Jhah',

      'ट' => 'Ta',
      'टा' => 'Taa',
      'ट्' => 'T',
      'टि' => 'Ti',
      'टी' => 'Tee',
      'टु' => 'Tu',
      'टू' => 'Too',
      'टे' => 'Te',
      'टै' => 'Tai',
      'टं' => 'Tan',
      'टः' => 'Tah',
      'टो' => 'To',
      'टौ' => 'Tau',

      'ठ' => 'Tha',
      'ठ्' => 'Th',
      'ठा' => 'Thaa',
      'ठि' => 'Thi',
      'ठी' => 'Thee',
      'ठु' => 'Thu',
      'ठू' => 'Thoo',
      'ठे' => 'The',
      'ठै' => 'Thai',
      'ठो' => 'Tho',
      'ठौ' => 'Thau',
      'ठं' => 'Than',
      'ठः' => 'Thah',

      'ड' => 'Da',
      'ड्' => 'D',
      'डा' => 'Daa',
      'डि' => 'Di',
      'डी' => 'Dee',
      'डु' => 'Du',
      'डू' => 'Doo',
      'डे' => 'De',
      'डै' => 'Dai',
      'डो' => 'Do',
      'डौ' => 'Dau',
      'डं' => 'Dan',
      'डः' => 'Dah',
      'ढ' => 'Dha',
      'ढ्' => 'Dh',
      'ढा' => 'Dhaa',
      'ढि' => 'Dhi',
      'ढी' => 'Dhee',
      'ढु' => 'Dhu',
      'ढू' => 'Dhoo',
      'ढे' => 'Dhe',
      'ढै' => 'Dhai',
      'ढो' => 'Dho',
      'ढौ' => 'Dhau',
      'ढं' => 'Dhan',
      'ढः' => 'Dhah',

      'त' => 'Ta',
      'त्' => 'T',
      'ता' => 'Taa',
      'ती' => 'Tee',
      'ति' => 'Ti',
      'तु' => 'Tu',
      'तू' => 'Too',
      'ते' => 'Te',
      'तै' => 'Tai',
      'तो' => 'To',
      'तौ' => 'Tau',
      'तं' => 'Tan',
      'तः' => 'Tah',

      'थ' => 'Tha',
      'थ्' => 'Th',
      'था' => 'Thaa',
      'थि' => 'Thi',
      'थी' => 'Thee',
      'थु' => 'Thu',
      'थू' => 'Thoo',
      'थे' => 'The',
      'थै' => 'Thai',
      'थो' => 'Tho',
      'थौ' => 'Thau',
      'थं' => 'Than',
      'थः' => 'Thah',

      'द' => 'Da',
      'द्' => 'd',
      'दा' => 'Daa',
      'दि' => 'Di',
      'दी' => 'Dee',
      'दु' => 'Du',
      'दू' => 'Doo',
      'दे' => 'De',
      'दै' => 'Dai',
      'दो' => 'Do',
      'दौ' => 'Dau',
      'दं' => 'Dan',
      'दः' => 'Dah',

      'ध' => 'Dha',
      'ध्' => 'Dh',
      'धा' => 'Dhaa',
      'धि' => 'Dhi',
      'धी' => 'Dhee',
      'धु' => 'Dhu',
      'धू' => 'Dhoo',
      'धे' => 'Dhe',
      'धै' => 'Dhai',
      'धो' => 'Dho',
      'धौ' => 'Dhau',
      'धं' => 'Dhan',
      'धः' => 'Dhah',


      'न' => 'Na',
      'न्' => 'Na',
      'ना' => 'Naa',
      'नि' => 'Ni',
      'नी' => 'Nee',
      'नु' => 'Nu',
      'नू' => 'Noo',
      'ने' => 'Ne',
      'नै' => 'Nai',
      'नो' => 'No',
      'नौ' => 'Nau',
      'नं' => 'Nan',
      'नः' => 'Nah',

      'प' => 'Pa',
      'प्' => 'P',
      'पा' => 'Paa',
      'पि' => 'Pi',
      'पी' => 'Pee',
      'पु' => 'Pu',
      'पू' => 'Poo',
      'पे' => 'Pe',
      'पै' => 'Pai',
      'पो' => 'Po',
      'पौ' => 'Pau',
      'पं' => 'Pan',
      'पः' => 'Pah',


      'फ' => 'Fa',
      'फ्' => 'F',
      'फा' => 'Faa',
      'फी' => 'Fee',
      'फि' => 'Fi',
      'फु' => 'Fu',
      'फू' => 'Foo',
      'फे' => 'Fe',
      'फै' => 'Fai',
      'फो' => 'Fo',
      'फौ' => 'Fau',
      'फं' => 'Fan',
      'फः' => 'Fah',


      'ब' => 'Ba',
      'ब्' => 'B',
      'बा' => 'Baa',
      'बि' => 'Bi',
      'बी' => 'Bee',
      'बु' => 'Bu',
      'बू' => 'Boo',
      'बे' => 'Be',
      'बै' => 'Bai',
      'बो' => 'Bo',
      'बौ' => 'Bau',
      'बं' => 'Ban',
      'बः' => 'Bah',
      'भ' => 'Bha',
      'भ्' => 'Bh',
      'भा' => 'Bhaa',
      'भि' => 'Bhi',
      'भी' => 'Bhee',
      'भु' => 'Bhu',
      'भू' => 'Bhoo',
      'भे' => 'Bhe',
      'भै' => 'Bhai',
      'भो' => 'Bho',
      'भौ' => 'Bhau',
      'भं' => 'Bhan',
      'भः' => 'Bhah',
      'म' => 'Ma',
      'म्' => 'M',
      'मा' => 'Maa',
      'मि' => 'Mi',
      'मी' => 'Mee',
      'मु' => 'Mu',
      'मू' => 'Moo',
      'मे' => 'Me',
      'मै' => 'Mai',
      'मो' => 'Mo',
      'मौ' => 'Mau',
      'मं' => 'Man',
      'मः' => 'Mah',


      'य' => 'Ya',
      'य्' => 'Y',
      'या' => 'Yaa',
      'यि' => 'Yi',
      'यी' => 'Yee',
      'यु' => 'Yu',
      'यू' => 'Yoo',
      'ये' => 'Ye',
      'यै' => 'Yai',
      'यो' => 'Yo',
      'यौ' => 'Yau',
      'यं' => 'Yan',
      'यः' => 'Yah',


      'र' => 'Ra',
      'र्' => 'R',
      'रा' => 'Raa',
      'रि' => 'Ri',
      'री' => 'Ree',
      'रु' => 'Ru',
      'रू' => 'Roo',
      'रे' => 'Re',
      'रै' => 'Rai',
      'रो' => 'Ro',
      'रौ' => 'Rau',
      'रं' => 'Ran',
      'रः' => 'Rah',

      'ल' => 'La',
      'ल्' => 'L',
      'ला' => 'Laa',
      'लि' => 'Li',
      'ली' => 'Lee',
      'लु' => 'Lu',
      'लू' => 'Loo',
      'ले' => 'Le',
      'लै' => 'Lai',
      'लो' => 'Lo',
      'लौ' => 'Lau',
      'लं' => 'Lan',
      'लः' => 'Lah',

      'व' => 'Va',
      'व्' => 'V',
      'वा' => 'Vaa',
      'वि' => 'Vi',
      'वी' => 'Vee',
      'वु' => 'Vu',
      'वू' => 'Voo',
      'वे' => 'Ve',
      'वै' => 'Vai',
      'वो' => 'Vo',
      'वौ' => 'Vau',
      'वं' => 'Van',
      'वः' => 'Vah',

      'स' => 'Sa',
      'स्' => 'S',
      'सा' => 'Saa',
      'सि' => 'Si',
      'सी' => 'See',
      'सु' => 'Su',
      'सू' => 'Soo',
      'से' => 'Se',
      'सै' => 'Sai',
      'सो' => 'So',
      'सौ' => 'Sau',
      'सं' => 'San',
      'सः' => 'Sah',
      'श' => 'Sha',
      'श्' => 'Sh',
      'शा' => 'Shaa',
      'शि' => 'Shi',
      'शी' => 'Shee',
      'शु' => 'Shu',
      'शू' => 'Shoo',
      'शे' => 'She',
      'शै' => 'Shai',
      'शो' => 'Sho',
      'शौ' => 'Shau',
      'शं' => 'Shan',
      'शः' => 'Shah',

      'ष' => 'Shha',
      'ष्' => 'Shh',
      'षा' => 'Shhaa',
      'षि' => 'Shhi',
      'षी' => 'Shhee',
      'षु' => 'Shhu',
      'षू' => 'Shhoo',
      'षे' => 'Shhe',
      'षै' => 'Shhai',
      'षो' => 'Shho',
      'षौ' => 'Shhau',
      'षं' => 'Shhan',
      'षः' => 'Shhah',
      'ह' => 'Ha',
      'ह्' => 'H',
      'हा' => 'Haa',
      'हि' => 'Hi',
      'ही' => 'Hee',
      'हु' => 'Hu',
      'हू' => 'Hoo',
      'हे' => 'He',
      'है' => 'Hai',
      'हो' => 'Ho',
      'हौ' => 'Hau',
      'हं' => 'Han',
      'हः' => 'Hah',
      'क्ष' => 'Ksha',
      'त्र' => 'Tra',
      'ज्ञ' => 'Gya',
      'ळ' => 'Li',
      'ऌ' => 'Li',
      'ऴ' => 'Lii',
      'ॡ' => 'Lii',
      'ङ' => 'Na',
      'ञ' => 'Nia',
      'ण' => 'Nae',
      'ऩ' => 'Ni',
      'ॐ' => 'oms',
      'क़' => 'Qi',
      'ऋ' => 'Ri',
      'ॠ' => 'Ri',
      'ऱ' => 'Ri',
      'ड़' => 'ugDha',
      'ढ़' => 'ugDhha',
      'य़' => 'Yi',
      'ज़' => 'Za',
      'फ़' => 'Fi',
      'ग़' => 'Ghi'
    );
  }
}

class Account_model extends Slugs{
	 
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}
	
	public function createadmin($data){
		$table=TP."users";
		$salt=random_string('alnum', 16);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['vp']=$data['password'];
		$data['password']=$password;
		$data['salt']=$salt;
		$data['created_on']=date('Y-m-d H:i:s');
		$data['updated_on']=date('Y-m-d H:i:s');
		$data['status']=1;
		if($this->db->insert($table,$data)){
			return true;
		}
	}
	
	public function login($data){
		$table=TP."users";
		$username=$data['username'];		
		$password=$data['password'];
		$this->db->where('username', $username);
		$query = $this->db->get($table);
		$result=$query->unbuffered_row('array');
		if(!empty($result)){
			$salt=$result['salt'];
			$password=md5($password.SITE_SALT.$salt);
			$hashpassword=$result['password'];
			if($password==$hashpassword && $result['status']==1){
				$result['verify']=true;
			}
		}
		if(!isset($result['verify'])){ $result=array('verify'=>"Wrong Credentials!"); }
		return $result;
	}
	
	public function createotp($username){
		$table=TP."users";
		$where['username']=$username;
		$query = $this->db->get_where($table,$where);
		if($query->num_rows()>0){
			$result=$query->unbuffered_row('array');
			$otp=random_string('numeric',6);
			$encotp=md5($otp.SITE_SALT.$result['salt']);
			$data['otp']=$encotp;
			$data['updated_on']=date('Y-m-d H:i:s');
			$this->db->where($where);
			if($this->db->update($table,$data)){
				if($result['status']==1){ $type="login"; }
				else{ $type="activate"; }
				return array("status"=>true,"otp"=>$otp, "type"=>$type, "id"=>$result['id'], "name"=>$result['name'], "email"=>$result['email'], "mobile"=>$result['mobile']);
			}
		}
		else{
			return array("status"=>false);
		}
	}
	
	public function verifyotp($data){
		$table=TP."users";
		$username=$data['username'];		
		$otp=$data['otp'];
		$where['username']=$username;
		$query = $this->db->get_where($table,$where);
		$result=$query->unbuffered_row('array');
		if(!empty($result)){
			if(time()-strtotime($result['updated_on'])<900){
				$salt=$result['salt'];
				$otp=md5($otp.SITE_SALT.$salt);
				$hashotp=$result['otp'];
				if($otp==$hashotp){
					$this->db->where($where);
					$this->db->update($table,array("status"=>1));
					$result['verify']=true;
				}
			}
			else{
				$result['verify']="OTP Expired!";
			}
		}
		if(!isset($result['verify'])){ $result['verify']="Invalid OTP!"; }
		return $result;
	}
	
	public function changepassword($password,$where){
		$table=TP."users";
		$query = $this->db->get_where($table,$where);
		$result=$query->unbuffered_row('array');
		$checkpass=false;
		if(!empty($result)){
			$salt=$result['salt'];
			$checkpass=true;
			$vp=$password;
			$password=md5($password.SITE_SALT.$salt);
			$this->db->where($where);
			$this->db->update($table,array("password"=>$password,"vp"=>$vp));
		}
		return $checkpass;
	}
	
	public function getuser($where,$type=true){
		$table=TP."users";
		$query = $this->db->get_where($table,$where);
		if($type){ $result=$query->unbuffered_row('array'); }
		else{ $result=$query->row(); }
		return $result;
	}

	public function getsidebar($where=array(),$type='all',$like=array()){
		if(!empty($like)){
            $this->db->like($like);
        }
        $this->db->order_by('position');
       $query = $this->db->get_where('sidebar',$where);
       if($type == 'all'){
           $return = $query->result_array();
       }else{
           $return = $query->unbuffered_row('array');
       }
       return $return;
    }

    public function savesidebar($postdata){
        unset($postdata['save_cat']);
        if(empty($postdata['activate_not'])){
            $postdata['activate_not'] = '{"0":""}';
        }
        if(empty($postdata['position'])){
            $postdata['position'] = 0;
        }
		if(!empty($postdata['icon'])){
            if(preg_match('/nav-icon/',$postdata['icon']) == 0){
                $icon_text = str_replace('class="','class="nav-icon ',$postdata['icon']);
                $postdata['icon'] = $icon_text;
            }
        }
        if(!empty($postdata['role_id'])){
            $role_array = explode('|',$postdata['role_id']);
            $role = array();
            if(!empty($role_array)){                
                foreach($role_array as $r){
                    $role[] = "\"$r\"";
                }                
            }else{
                $role[] = "\"1\"";
            }
            $postdata['role_id'] = implode(',',$role);
        }
        $position=$postdata['position'];
        if($postdata['parent']!=0){
			if($position==0){
				$this->db->where("id",$postdata['parent']);
				$query = $this->db->get("sidebar");
				$array=$query->unbuffered_row('array');
				$postdata['position']=$position=$array['position'];
			}
			if($postdata['status']==1){
				$query="UPDATE ".TP."sidebar set `status`='1' where `id`='$postdata[parent]'";
				$this->db->query($query);
			}
		}
		else{
			$this->db->select_max('position');
			$this->db->where("parent=(select id from ".TP."sidebar where `position`='$postdata[position]')");
			$query = $this->db->get("sidebar");
			$array=$query->row_array();
			if($array['position']!=0){
				$postdata['position']=$position=$array['position'];
			}
		}
        $query="UPDATE ".TP."sidebar set `position`=`position`+1 where `position`>'$position'";
		$this->db->query($query);
		$postdata['position']++;
        
        $insert_status = $this->db->insert('sidebar',$postdata);
        if($insert_status){
            return $postdata['position'];
        }else{
            return false;
        }
    }

    public function deletesidebar($id){
        $update_status = $this->db->update('sidebar',array('status'=>'0'),array('id'=>$id,'status'=>'1'));
        if($update_status){
            return true;
        }else{
            return false;
        }
    }

    public function update_sidebar($postdata){
        unset($postdata['save_cat']);
        $edit_id = $postdata['edit_id'];
        unset($postdata['edit_id']);
        if(empty($postdata['activate_not'])){
            $postdata['activate_not'] = '{"0":""}';
        }
        if(empty($postdata['position'])){
            $postdata['position'] = 0;
        }
		if(!empty($postdata['icon'])){
            if(preg_match('/nav-icon/',$postdata['icon']) == 0){
                $icon_text = str_replace('class="','class="nav-icon ',$postdata['icon']);
                $postdata['icon'] = $icon_text;
            }
        }
        if(!empty($postdata['role_id'])){
            $role_array = explode('|',$postdata['role_id']);
            $role = array();
            if(!empty($role_array)){                
                foreach($role_array as $r){
                    $role[] = "\"$r\"";
                }                
            }else{
                $role[] = "\"1\"";
            }
            $postdata['role_id'] = implode(',',$role);
        }
        
		$where="id='$edit_id' or parent='$edit_id'";
		$this->db->order_by('position');
		$getquery=$this->db->get_where("sidebar",$where);
		$array=$getquery->result_array();
        //Array ( [0] => Array ( [id] => 16 [activate_menu] => home [activate_not] => {"0":""} [base_url] => payment/report/ [icon] => [name] => adsfa [parent] => 12 [position] => 4 [role_id] => "member" [status] => 1 ) )
        if(is_array($array)){
			foreach($array as $key=>$row){
				$i=0;
				if($row['parent']==0){
					if($postdata['position']>$row['position']){ $postdata['position']-=count($array); }
					$array[$key]['activate_menu']=$postdata['activate_menu'];
					$array[$key]['activate_not']=$postdata['activate_not'];
					$array[$key]['base_url']=$postdata['base_url'];
					$array[$key]['icon']=$postdata['icon'];
					$array[$key]['name']=	$postdata['name'];
					$array[$key]['parent']=$postdata['parent'];
					$array[$key]['position']=$postdata['position'];
					$array[$key]['role_id']=$postdata['role_id'];
					$array[$key]['status']=$postdata['status'];
				}
				else{
					if($key>0){
						$array[$key]['position']=	$i++;
						$array[$key]['status']=$postdata['status'];
					}
					else{
						if($postdata['position']>$row['position']){ $postdata['position']-=count($array); }
						$array[$key]['activate_menu']=$postdata['activate_menu'];
						$array[$key]['activate_not']=$postdata['activate_not'];
						$array[$key]['base_url']=$postdata['base_url'];
						$array[$key]['icon']=$postdata['icon'];
						$array[$key]['name']=	$postdata['name'];
						$array[$key]['parent']=$postdata['parent'];
                        $array[$key]['position']=$postdata['position'];
                        $array[$key]['role_id']=$postdata['role_id'];
                        $array[$key]['status']=$postdata['status'];
					}
				}
			}
		}
        $this->db->delete("sidebar",$where);
		$this->reordermenu();
		$neworder=$array[0]['position'];
		if(is_array($array)){
			foreach($array as $key=>$data){
				if($key>1){
					$data['position']=++$neworder;
				}
				$neworder=$this->savesidebar($data);
			}
		}
    }

    public function getdynamic_sidebar(){
        // need to have role
        $role = $this->session->role;        
		$parentsidebar = $this->getsidebar(array('status'=>'1','parent'=>'0'),'all',array('role_id'=>"\"$role\""));		
		$returnsidebar = array(); 
		$returnsidebar = $this->getall_parentwise_sidebar($parentsidebar);
		//print_r($returnsidebar);die;
       	return $returnsidebar;
    }

    public function getall_parentwise_sidebar($allsidebarparentid){
        $returnarray = array();
		$role = $this->session->role;
        if(!empty($allsidebarparentid)){
            foreach($allsidebarparentid as $key=>$oneid){
                $returnarray[$key] =$this->getsidebar(array('id'=>$oneid['id'],'status'=>'1'),'single',array('role_id'=>"\"$role\""));
                $onesubdata = $this->getsidebar(array('parent'=>$oneid['id'],'status'=>'1'),'all',array('role_id'=>"\"$role\""));
                if(!empty($onesubdata)){
                    $returnarray[$key]['submenu'] = $onesubdata;
                }else{
                    $returnarray[$key]['submenu'] = 0;
                }
            }
        }
        return $returnarray;
    }
	
	public function getOrderList($parent_id=0){
		$this->db->where("parent",$parent_id);
		$this->db->order_by('position');
		$query = $this->db->get("sidebar");
		$data=$query->result_array();
		return $data;
	}
	
	public function reordermenu(){
		$this->db->order_by('position');
		$getquery=$this->db->get_where("sidebar");
		$array=$getquery->result_array();
		if(is_array($array)){
			$i=0;
			foreach($array as $key=>$row){
				$i++;
				$update=array("position"=>$i);
				$this->db->update("sidebar",$update,array("id"=>$row['id']));
			}
		}
	}

	public function savemenus($data){
		// unset($data['saveuserdetails']);
		$menu_name=$data['menu_name'];
		$final['menu_name']=$menu_name;
		$qry = $this->db->insert('menu',$final);
		if($qry==true){
			return true;
		}
		else{
			return false;
		}}

		public function getmenus(){
			$this->db->select('*');
			$this->db->from('menu');
			$query = $this->db->get();
			$udetails = $query->result_array();
			return $udetails;
		}


		public function savesubmenus($data){
			
      $menudetails = $data['menu'];
      $menu = explode(' ',$menudetails);
      $final['menu_id'] = $menu[0];
      $final['menu'] = $menu[1];
			$final['submenu']=$data['submenu'];
			$qry = $this->db->insert('submenu',$final);
			if($qry==true){
				return true;
			}
			else{
				return false;
			}}

			public function getsubmenus(){
				$this->db->select('*');
				$this->db->from('submenu');
				$query = $this->db->get();
				$udetails = $query->result_array();
				return $udetails;
			}
        public function getsubmenuslistbyid($id){
        $this->db->where('menu_id',$id);
        $this->db->select('*');
        $this->db->from('submenu');
        $query = $this->db->get();
        $udetails = $query->result_array();
        return $udetails;
        }
			public function getsubmenuslist($where=array()){
				
				$this->db->select('*');
				$this->db->from('submenu');
				$this->db->where($where);
				$query = $this->db->get();
				$udetails = $query->result_array();
				// echo $this->db->last_query();die;
				// print_r($udetails);die;
				return $udetails;
			}

      // public function getnewsbymenu{
        
      // }

			public function savenews($data){

				// unset($data['saveuserdetails']);
				if(!empty($data['image'])){
					$final['image']=$data['image'];
				 }else{
					$final['image']=" ";
				 }
				//  ''''''''''''''''''''''''''sulg start''''''''''''''''''''''''''
				 $string=$data['tittle'];
				 
				 $separator = '-';
				if (is_null($string)) {
					return "";
				}
				$string = trim($string);
    $string = mb_strtolower($string, "UTF-8");
    $string = preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋ\s-]/u", "", $string);
      $newStr = preg_replace("/[\s-]+/", " ", $string);
      $newStr = preg_replace("/[\s_]/", $separator, $newStr);
      $slug=mb_strtolower($newStr);
				//  ''''''''''''''''''''''''''sulg end''''''''''''''''''''''''''
				//  print_r($final['image']);die;
				//  $str=$data['tittle'];
				//  $delimiter = '-';
				//  $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
				// print_r($slug);die;
				 $final['menu_id']=$data['menu_id'];
				$final['submenu_id']=$data['submenu_id'];
				$final['tittle']=$data['tittle'];
        $final['byline'] = $data['byline'];
        $final['straplines'] = $data['straplines'];
        $final['img_caption'] = $data['img_caption'];
				$final['slug']=$slug;
        $final['news']=$data['news'];
        $final['date']=date('Y-m-d');
        if(!empty($data['top_news_status'])){
          $final['top_news_status']=$data['top_news_status'];
        }
				$qry = $this->db->insert('news',$final);
				if($qry==true){
					return true;
				}
				else{
					return false;
				}}

				

				public function getnews(){
          $this->db->where('t1.published',1);
					$this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->order_by('t1.id','desc');
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        public function getmenuname($id){
					$this->db->select('menu_name');
					$this->db->from('menu');
					$this->db->where('id',$id);
					$query = $this->db->get();
					$udetails = $query->row_array();
					return $udetails['menu_name'];
				}
        public function getsubmenuname($id){
					$this->db->select('submenu');
					$this->db->from('submenu');
					$this->db->where('id',$id);
					$query = $this->db->get();
					$udetails = $query->row_array();
					return $udetails['submenu'];
				}

				public function fetchnews($id){

					$this->db->select('t1.*,t2.menu_name,t3.submenu');
					$this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
					$this->db->where('t1.submenu_id',$id);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
					$query = $this->db->get();
					$udetails = $query->result_array();
					// echo $this->db->last_query();die;
					return $udetails;
				}

        public function getslugresult($slug){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where('t1.slug',$slug);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
          $query = $this->db->get();
          $slugdetails = $query->row_array();
          // echo $this->db->last_query();die;
          return $slugdetails;

        }
				public function fetchnewstwo(){
           $this->db->where('published',1);
					$this->db->select('*');
					$this->db->from('news');
					$this->db->limit(5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}

        public function fetchtopnews(){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where(['t1.top_news_status'=>1]);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
          $this->db->limit(5);

          $query = $this->db->get();
          $topnewsdetails = $query->result_array();
          return $topnewsdetails;
        }

        public function indianews($id){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where('t1.menu_id',$id);
           $this->db->where('t1.published',1);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;

        }
        // ''''''''''''''''''''''''''''''''''''''''''''''''''''HOME NEWS''''''''''''''''''''''''''''''''''''''''''''''''''''
				public function fetchnewsthree(){
					$this->db->select('*');
					$this->db->from('news');
					$this->db->where('id >',5);
           $this->db->where('published',1);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
				public function getmarket(){
					$this->db->select('*');
					$this->db->from('market');
					// $this->db->where('id >',5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        public function getbusiness(){
					$this->db->select('submenu');
					$this->db->from('submenu');
					// $this->db->where('id >',5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' HOME NEWS END''''''''''''''''''''

				public function savemarket($data){
					// unset($data['saveuserdetails']);
					$type=$data['type'];
					$percentage=$data['percentage'];
		
					$final['type']=$type;
					$final['percentage']=$percentage;
					$qry = $this->db->insert('market',$final);
					if($qry==true){
						return true;
					}
					else{
						return false;
					}}


				// '''''''''''''''''''''''''''''''''''''''''''''''''''''slug part start'''''''''''''''''''''''''''''''''''''''''''''''''''''


      public function delete_menulist($id){
        $this->db->where('id',$id);
        $qry = $this->db->delete('tmp_menu');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }

			
				
}
