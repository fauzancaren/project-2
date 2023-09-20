<?php
  class ScrapBCA {
    private $Vawfht5ptfi0;
    private $V3j3arvkehxc = 'user klik bca';
    private $Vye4xf5jqii3 = 'pass klik bca';
    private $Vq0fc1qb0xgw = 'https://ibank.klikbca.com/';
    private $Vq0fc1qb0xgw_login = 'https://ibank.klikbca.com/authentication.do';
    private $Vq0fc1qb0xgw_menu = 'https://ibank.klikbca.com/nav_bar_indo/menu_bar.htm';

    public function __construct() {
      $this->ipaddress = getenv("REMOTE_ADDR");
    }

    public function start() {
      $Vfi3k24kxtdd = $this->get_page_no_cookie('https://ibank.klikbca.com/');
      $Vlhxiypfq3u3 = true;
      $Vk3mnth4mwnk;
      $Vtmtbedsltvs;
      
      if (preg_match('/JSESSIONID=(.*?);/', $Vfi3k24kxtdd, $Vc5gvi0wzj31)) {
        $Vk3mnth4mwnk = $Vc5gvi0wzj31[1];
        file_put_contents('log_bca.txt', date('Y-m-d H:i') ." : ". 'JSESSIONID=' . $Vk3mnth4mwnk, FILE_APPEND);
        file_put_contents('result_open.html', $Vfi3k24kxtdd);
      } else {
        $Vlhxiypfq3u3 = false;
        file_put_contents('log_bca.txt', date('Y-m-d H:i') ." : ". 'COOKIE NOT FOUND', FILE_APPEND);
        file_put_contents('result_open.html', $Vfi3k24kxtdd);
      }

      if (preg_match('/ARPT=(.*?);/', $Vfi3k24kxtdd, $Vc5gvi0wzj312)) {
        $Vtmtbedsltvs = $Vc5gvi0wzj312[1];
        file_put_contents('log_bca.txt', "\r\n". "\r\n" . date('Y-m-d H:i') ." : ". 'ARPT=' . $Vtmtbedsltvs, FILE_APPEND);
      } else {
        $Vlhxiypfq3u3 = false;
        file_put_contents('log_bca.txt', date('Y-m-d H:i') ." : ". 'COOKIE2 NOT FOUND', FILE_APPEND);
      }

      $Vx1e1ngr4tae['cookie_1'] = $Vk3mnth4mwnk;
      $Vx1e1ngr4tae['cookie_2'] = $Vtmtbedsltvs;
      $Vx1e1ngr4tae['ketemu'] = $Vlhxiypfq3u3;

      return $Vx1e1ngr4tae;
    }

    private function get_page_no_cookie($Vce2vhxzp34i) {
      $Vz0o3e035olm = curl_init();
      curl_setopt($Vz0o3e035olm, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($Vz0o3e035olm, CURLOPT_AUTOREFERER, 1);
      curl_setopt($Vz0o3e035olm, CURLOPT_HTTPGET, 1);
      curl_setopt($Vz0o3e035olm, CURLINFO_HEADER_OUT,1);
      curl_setopt($Vz0o3e035olm, CURLOPT_VERBOSE, 1); 
      curl_setopt($Vz0o3e035olm, CURLOPT_HEADER, 1); 
      curl_setopt($Vz0o3e035olm, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($Vz0o3e035olm, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
      curl_setopt($Vz0o3e035olm, CURLOPT_URL, $Vce2vhxzp34i);
      $Vmwrugtvcipm = curl_exec($Vz0o3e035olm);
      curl_close($Vz0o3e035olm);
      return $Vmwrugtvcipm;
    }

    public function login($Vk3mnth4mwnk, $Vtmtbedsltvs) {
      file_put_contents('log_bca.txt',  "\r\n" . date('Y-m-d H:i').' : IP Address=' . $this->ipaddress, FILE_APPEND);
      $V0a4iekmarsp = "value%28actions%29=login&value%28user_id%29=$this->user&value%28user_ip%29=$this->ipaddress&value%28pswd%29=$this->pass&value%28Submit%29=LOGIN";
      $Vmwrugtvcipm_login = $this->post_to_page($this->bca_url_login, $this->bca_url, $Vk3mnth4mwnk, $Vtmtbedsltvs, $V0a4iekmarsp);
      file_put_contents('page_login.html', $Vmwrugtvcipm_login);
      $Veybqgmtwcsq = false;
      if (strpos($Vmwrugtvcipm_login, "value(actions)=logout")) {
        $Veybqgmtwcsq = true;
      }
      return $Veybqgmtwcsq;   
    }

    private function post_to_page($Vce2vhxzp34i, $V12kvd21uxw2=null, $Vz0o3e035olmookie=null, $Vz0o3e035olmookie2, $Vfoepkaok5ui=null) {
        $Vz0o3e035olm = curl_init();
      curl_setopt($Vz0o3e035olm, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($Vz0o3e035olm, CURLINFO_HEADER_OUT, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_VERBOSE, true); 
      curl_setopt($Vz0o3e035olm, CURLOPT_HEADER, true); 
      curl_setopt($Vz0o3e035olm, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($Vz0o3e035olm, CURLOPT_FOLLOWLOCATION, true); 
      curl_setopt($Vz0o3e035olm, CURLOPT_MAXREDIRS, 5);
      if ($Vz0o3e035olmookie) curl_setopt($Vz0o3e035olm, CURLOPT_COOKIE, "ARPT=$Vz0o3e035olmookie2; JSESSIONID=$Vz0o3e035olmookie"); 
      if ($V12kvd21uxw2) curl_setopt($Vz0o3e035olm, CURLOPT_REFERER, $V12kvd21uxw2);
      curl_setopt($Vz0o3e035olm, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
      curl_setopt($Vz0o3e035olm, CURLOPT_URL, $Vce2vhxzp34i);
      curl_setopt($Vz0o3e035olm, CURLOPT_POST, 1);
      if ($Vfoepkaok5ui) curl_setopt($Vz0o3e035olm, CURLOPT_POSTFIELDS, $Vfoepkaok5ui);
      $Vmwrugtvcipm = curl_exec($Vz0o3e035olm);
      curl_close($Vz0o3e035olm);
      return $Vmwrugtvcipm;
    }

    public function show_menu($Vk3mnth4mwnk, $Vtmtbedsltvs) {
      $Vz0o3e035olm = curl_init();
      curl_setopt($Vz0o3e035olm, CURLOPT_SSL_VERIFYPEER, false);   
      curl_setopt($Vz0o3e035olm, CURLOPT_COOKIE, "ARPT=$Vtmtbedsltvs; JSESSIONID=$Vk3mnth4mwnk"); 
      curl_setopt($Vz0o3e035olm, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_VERBOSE, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_HEADER, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
      curl_setopt($Vz0o3e035olm, CURLOPT_URL, $this->bca_url_menu); 
      curl_setopt($Vz0o3e035olm, CURLOPT_REFERER, $this->bca_url_login);
      curl_setopt($Vz0o3e035olm, CURLOPT_FOLLOWLOCATION, true);
      $Vmwrugtvcipm_show_menu = curl_exec($Vz0o3e035olm);
      file_put_contents('page_show_menu.html', $Vmwrugtvcipm_show_menu);
      $V12kvd21uxw2 = 'https://ibank.klikbca.com/authentication.do?value(actions)=welcome';
      $V0a4iekmarsp = 'value%28actions%29=selecttransaction'; 
      $Vmwrugtvcipm_result_menu = $this->post_to_page($this->bca_url_login, $V12kvd21uxw2, $Vk3mnth4mwnk, $Vtmtbedsltvs, $V0a4iekmarsp);
      file_put_contents('page_result_menu.html', $Vmwrugtvcipm_result_menu);
    }

    public function info_rekening($Vk3mnth4mwnk, $Vtmtbedsltvs) {
      $Vce2vhxzp34i = 'https://ibank.klikbca.com/nav_bar_indo/account_information_menu.htm';
        $Vmwrugtvcipm_info_rekening = $this->get_page_cookie($Vce2vhxzp34i,$Vk3mnth4mwnk,$Vtmtbedsltvs,$this->bca_url_login);
        file_put_contents('page_info_rekening.html', $Vmwrugtvcipm_info_rekening);
    }

    private function get_page_cookie($Vce2vhxzp34i, $Vk3mnth4mwnk=null, $Vtmtbedsltvs=null, $V12kvd21uxw2=null) {
      $Vz0o3e035olm = curl_init();
      curl_setopt($Vz0o3e035olm, CURLOPT_SSL_VERIFYPEER, false);   
      curl_setopt($Vz0o3e035olm, CURLOPT_COOKIE, "ARPT=$Vtmtbedsltvs; JSESSIONID=$Vk3mnth4mwnk"); 
      curl_setopt($Vz0o3e035olm, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_HEADER, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);  
      curl_setopt($Vz0o3e035olm, CURLOPT_URL, $Vce2vhxzp34i); 
      curl_setopt($Vz0o3e035olm, CURLOPT_REFERER, $V12kvd21uxw2);
      curl_setopt($Vz0o3e035olm, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($Vz0o3e035olm, CURLOPT_HTTPGET, true);
      $Vmwrugtvcipm = curl_exec($Vz0o3e035olm);
      curl_close($Vz0o3e035olm);
      return $Vmwrugtvcipm;
    }

    public function show_mutasi($Vk3mnth4mwnk,$Vtmtbedsltvs) {
      $Vce2vhxzp34i = 'https://ibank.klikbca.com/accountstmt.do';
        $V12kvd21uxw2 = 'https://ibank.klikbca.com/nav_bar_indo/account_information_menu.htm';
        $V0a4iekmarsp = "value%28actions%29=acct_stmt";
        $V2pri1s4gwvt = $this->post_to_page($Vce2vhxzp34i, $V12kvd21uxw2, $Vk3mnth4mwnk, $Vtmtbedsltvs, $V0a4iekmarsp);
        file_put_contents('mutasi.html', $V2pri1s4gwvt);
    }

    public function show_last_mutasi($Vk3mnth4mwnk,$Vtmtbedsltvs) {
      $Viy2hlzwo4tf = mktime(0,0,0,date("n"),date("d"),date("Y"));
      $Vuq42qtkd4az = mktime(0,0,0,date("n"),date("d")-31,date("Y"));
      
      file_put_contents('log_bca.txt',  "\r\n" . date('Y-m-d H:i')." : tgl1=$Vuq42qtkd4az ," .date("Y-m-d", $Vuq42qtkd4az) , FILE_APPEND);
      file_put_contents('log_bca.txt',  "\r\n" . date('Y-m-d H:i')." : tgl2=$Viy2hlzwo4tf ," .date("Y-m-d", $Viy2hlzwo4tf) , FILE_APPEND);

        $Vce2vhxzp34i = 'https://ibank.klikbca.com/accountstmt.do?value(actions)=acctstmtview';
        $V12kvd21uxw2 = 'https://ibank.klikbca.com/accountstmt.do?value(actions)=acct_stmt';
      
        $V0a4iekmarsp = array(
          'value(D1)'=>'0',
        'value(endDt)'=> date("d", $Viy2hlzwo4tf),
        'value(endMt)'=> date("n", $Viy2hlzwo4tf),
        'value(endYr)'=> date("Y", $Viy2hlzwo4tf),
        'value(fDt)'=>'',
        'value(r1)'=>'1',
        'value(startDt)'=> date("d", $Vuq42qtkd4az),
        'value(startMt)'=> date("n", $Vuq42qtkd4az),
        'value(startYr)'=> date("Y", $Vuq42qtkd4az),
        'value(submit1)'=>'Lihat Mutasi Rekening',
        'value(tDt)'=>''
      );
      
      $Vmwrugtvcipm_mutasi = $this->post_to_page($Vce2vhxzp34i, $V12kvd21uxw2, $Vk3mnth4mwnk, $Vtmtbedsltvs, $V0a4iekmarsp);
      file_put_contents('page_mutasi.html', $Vmwrugtvcipm_mutasi);
    }

    public function logout($Vk3mnth4mwnk, $Vtmtbedsltvs) {
      $V0a4iekmarsp = "value%28actions%29=logout";
        $V12kvd21uxw2 = 'https://ibank.klikbca.com/top.htm';
        $Vmwrugtvcipm_logout = $this->post_to_page($this->bca_url_login, $V12kvd21uxw2, $Vk3mnth4mwnk, $Vtmtbedsltvs, $V0a4iekmarsp);
        file_put_contents('page_logout.html', $Vmwrugtvcipm_logout);
    }
  }
?>