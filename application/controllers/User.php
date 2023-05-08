<?php defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH. 'application/libraries/dompdf/autoload.inc.php';
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
            return redirect('login');
        }
        $this->load->model('user_model');
    }
    public function index(){
        $data['user_details'] = $this->user_model->getuserdetails();
        $data['requests'] = $this->user_model->getrequest();
        $data['title']="Requests";
        $this->load->view('header', $data);
        $this->load->view('user/requests', $data);
        $this->load->view('footer');
    }
    
    public function payment($id){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('card_number','Card Number','required');
        $this->form_validation->set_rules('name','Name on Card','required');
        $this->form_validation->set_rules('expiry','Expiry','required');
        $this->form_validation->set_rules('cvv','CVV','required');
        if($this->form_validation->run()){
            $post = $this->input->post();            
            if($this->user_model->update_user_id($id,$this->session->userdata('id'))){
                return redirect('user/query/'.$id);
            }
           
        }
        else{
            $cart = $this->user_model->cart($id);
            foreach($cart as $cart){
                $data['package'] = $this->user_model->package_details($cart->package_id); 
            }
            $data['user_details'] = $this->user_model->getuserdetails();            
            $data['title']="Payment Methods";
            $data['id'] = $id;
            $this->load->view('header', $data);
            $this->load->view('user/payment', $data);
            $this->load->view('footer');
        }
    }
    public function query($id){
        $query = $this->user_model->getlastquery($id);
        


        foreach($query as $q){
            $age = $q->age; 
            $gender = $q->gender;
            $height = $q->height;
            $height_unit = $q->height_unit;       
            $weight = $q->weight; 
            $weight_unit = $q->weight_unit;
            $health = $q->health_status; 
            $activity = $q->activity_level; 
            $food = $q->food_preferences;
            $food_details = $q->food_preference_details;   
            $cooking = $q->cooking_skills;   
            $budget = $q->budget;
            $gender = "Male";
        }        
       
        
        // Generated @ codebeautify.org

        $ch = curl_init();
          
        //$question = "You will be acting as an expert in nutrition and healthy eating habits. Your mission is to generate list of daily diet plan for each week and a shopping list according to it.
        $question = "can you provide me with a month diet plan, exercise plan and a shopping list separated inside each day HTML table according to my preferences. 
        My gender is ".$gender."
        My age is ".$age."
        My Gender is ".$gender."
        My height ".$height. $height_unit."
        My weight is ".$weight.$weight_unit."
        My health status ".$health."
        My physical activity level ".$activity."
        My food preferences are ".$food. "and Food preference details are".$food_details." 
        My cooking skills are ".$cooking."
        My budget is SAR".$budget;            
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $postdata = array(
            "model" => "text-davinci-003",
            "prompt" => $question,
            "temperature" => 0.4,
            "max_tokens" => 3000,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0
        );
        $postdata = json_encode($postdata);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer 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'; // previous key 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;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($result, true);
        
        $query = array(
            "user_id" => $this->session->userdata('id'),
            "query_id" => $q->id,
            'response' => $result['choices'][0]['text']
        );          
        $id = $this->user_model->insert_response($query);
        return redirect('user/view_details/'.$id);              
    }
    public function view_details($id){
        $data['query'] = $this->user_model->getrequestbyid($id);
        $data['user_details'] = $this->user_model->getuserdetails();        
        $data['title']="View Details";
        $this->load->view('header', $data);
        $this->load->view('user/details', $data);
        $this->load->view('footer');
    }    
    public function pdf($id){
        // Get output html
        $this->load->model('user_model');
        $data['response'] = $this->user_model->getrequestbyid($id);
        $this->load->view('user/generatepdf',$data);
        $html = $this->output->get_output();
            
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->set_option('isRemoteEnabled',TRUE);
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("Diet_plan.pdf", array("Attachment"=>0));
                
    }
    public function rate($id){
        $data['user_details'] = $this->user_model->getuserdetails();        
        $data['title']="View Details";
        $this->load->view('header', $data);
        $this->load->view('user/rate',$id);
        $this->load->view('footer');
    }
}



