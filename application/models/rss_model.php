
<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class feed_model extends Model
{
 
    // get all
    function get_feeds()
    {
        $query = $this->db->get('posts');
        if ($query->numRows() > 0) { // check for rows
            return $query->result();
        }
        return;
    }
}
 