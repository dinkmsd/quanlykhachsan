<?php
require_once APPPATH . 'core/My_Model.php';
class Quanlyphong_Model extends My_Model
{
    public $table = "phongchothue";
    
    var $conf;
    
      public function __construct()
     {
        parent::__construct();
        $id = $this->uri->rsegment(3);
        
        $this->conf = array(
            'start_day' => 'monday',
            'show_next_prev' => true,
            'next_prev_url' => base_url(). 'admin/Quanlyphong/Chitietphong/'.$id
        );
        
        $this->conf['template'] = '
               
        {table_open}<table border="0" cellpadding="0" cellspacing="0" class ="calendar">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class ="day"> {/cal_cell_start}
        {cal_cell_start_today}<td class ="day">{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
            <div class="day_num">{day}</div>
            <div class="content">{content}</div>
        {/cal_cell_content}
        {cal_cell_content_today}
            <div class="day_num highlight">{day}</div>
            <div class="content">{content}</div>
        {/cal_cell_content_today}

        {cal_cell_no_content} <div class="day_num">{day}</div> {/cal_cell_no_content}
        {cal_cell_no_content_today} <div class="day_num highlight">{day}</div> {/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close} 

            
            ';
    }
    
    public function get_calendar_data($year, $month)
    {
        $id = $this->uri->rsegment(3);
        $query = $this->db->select('date, data')->from('calendar')
            ->like('date',"$year-$month",'after')->where('idphong_chothue', $id)->get();
        
        $cal_data=array();
        
        foreach ($query->result() as $row){
            $cal_data[substr($row->date,8,2)] = $row->data;
        }
        
        return $cal_data;
      
    }
    
    public function add_calendar_data($id,$date, $data)
    {
        
       if($this->db->select('idphong_chothue, date')->from('calendar')->where('idphong_chothue',$id)->where('date',$date)->count_all_results())
       {
           $this->db->where('idphong_chothue',$id)->where('date',$date)->update('calendar', array(
               'date' =>$date,
               'data' =>$data
           ));
       }
       else 
       {
            $this->db->insert('calendar', array(
                'idphong_chothue' =>$id,
                'date' =>$date,
                'data' =>$data
            ));
       }
    }
    
    public function generate($year,$month)
    {
        
        $id = $this->uri->rsegment(3);
        $this->load->library('calendar', $this->conf);
        
       
        
        $cal_data = $this->get_calendar_data($year, $month);
        
        return $this->calendar->generate($year,$month,$cal_data);
    }
    
    
}