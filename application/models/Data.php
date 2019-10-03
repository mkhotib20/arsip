<?php 
/**
 * 
 */
class data extends CI_Model
{
	public function isExist($id, $user)
	{
		return $this->db->query("SELECT * FROM tb_notification WHERE notif_doc = '$id' AND notif_user = '$user' ");
	}
	public function getArsip()
	{
		return $this->db->query("SELECT * FROM tb_arsip, tb_dep WHERE tb_arsip.departemen = tb_dep.dep_id");
	}
	
	public function read($table, $where=null, $id=null, $limit=null,  $order=null, $orderType=null)
	{
		if ($where!=null) {
			$this->db->order_by($order, $orderType);
			return $this->db->get_where($table, array($where => $id ), $limit, $order );
		}
		else{
			$this->db->order_by($order, $orderType);
			return $this->db->get($table, $limit, $order );
		}
	}
	public function getNotif($user)
	{
		return $this->db->query("SELECT * FROM tb_notification, tb_dokumen WHERE tb_notification.notif_doc = tb_dokumen.dok_id AND notif_user = '$user'
		GROUP BY notif_doc ORDER BY notif_status ASC, notif_timestamp DESC ");
	}
	public function markAsRead($user, $dok_id)
	{
		return $this->db->query("UPDATE tb_notification SET notif_status=1 WHERE notif_doc = '$dok_id' AND notif_user='$user' ");
	}
	public function clear($user)
	{
		return $this->db->query("DELETE FROM tb_notification WHERE notif_status=1 AND notif_user = '$user' ");
	}
	public function getNotifRow($user)
	{
		return $this->db->query("SELECT * FROM tb_notification, tb_dokumen WHERE tb_notification.notif_doc = tb_dokumen.dok_id AND notif_status = 0 AND notif_user = '$user'
		GROUP BY notif_doc ORDER BY notif_timestamp DESC ")->num_rows();
	}
	public function readFilter($tgl_start, $tgl_end)
	{
		return $this->db->query("SELECT * FROM tb_dokumen WHERE tgl_akt_in BETWEEN '$tgl_start' AND '$tgl_end' ");
	}
	public function delete($table, $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->delete($table);
	}
	public function findReplace($tb, $gedung, $rak, $th)
	{
	    $like = '%'.$th.'%';
		return $this->db->query("update ".$tb." set no_rak = '$rak', 
		no_gedung = '$gedung'  WHERE no_surat LIKE '$like'");
	}
	public function readUser()
	{
		return $this->db->query("SELECT * FROM tb_role, tb_user WHERE tb_user.role = tb_role.role_id");
	}
	public function update($table, $data, $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->update($table, $data);
	}
	public function insert($tbl, $data)
	{
		return $this->db->insert($tbl, $data);
	}
	public function replace($tbl, $data)
	{
		return $this->db->replace($tbl, $data);
	}
	public function getRole()
	{
		return $this->db->query("SELECT * FROM tb_role WHERE role_id NOT IN (2)");
	}
}
 ?>