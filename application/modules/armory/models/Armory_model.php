<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class armory_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	public function getPlayerInfo($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->where('guid',$id)->get('characters');
    }
    public function getCharInvHead($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '0');
        return $this->multirealm->get();
    }

    public function getCharInvNeck($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '1');
        return $this->multirealm->get();
    }

    public function getCharInvShoulders($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '2');
        return $this->multirealm->get();
    }

    public function getCharInvBody($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '3');
        return $this->multirealm->get();
    }

    public function getCharInvChest($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '4');
        return $this->multirealm->get();
    }

    public function getCharInvWaist($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '5');
        return $this->multirealm->get();
    }

    public function getCharInvLegs($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '6');
        return $this->multirealm->get();
    }

    public function getCharInvFeet($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '7');
        return $this->multirealm->get();
    }

    public function getCharInvWrists($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '8');
        return $this->multirealm->get();
    }

    public function getCharInvHands($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '9');
        return $this->multirealm->get();
    }

    public function getCharInvFingerOne($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '10');
        return $this->multirealm->get();
    }

    public function getCharInvFingerTwo($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '11');
        return $this->multirealm->get();
    }

    public function getCharInvTrinketOne($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '12');
        return $this->multirealm->get();
    }

    public function getCharInvTrinketTwo($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '13');
        return $this->multirealm->get();
    }

    public function getCharInvBack($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '14');
        return $this->multirealm->get();
    }

    public function getCharInvMainHand($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '15');
        return $this->multirealm->get();
    }

    public function getCharInvOffHand($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '16');
        return $this->multirealm->get();
    }

    public function getCharInvRanged($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '17');
        return $this->multirealm->get();
    }

    public function getCharInvTabard($MultiRealm, $id)
    {
        $this->multirealm = $MultiRealm;
        $this->multirealm->select('itemEntry');
        $this->multirealm->from('character_inventory a');
        $this->multirealm->join('item_instance b', 'a.item = b.guid', 'left');
        $this->multirealm->where('a.guid', $id)->where('a.bag', '0')->where('a.slot', '18');
        return $this->multirealm->get();
    }
	public function searchchar($MultiRealm, $search)
    {
        $this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->like('LOWER(name)', strtolower($search))->get('characters');
    }
	public function searchguild($MultiRealm, $search)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->like('LOWER(name)', strtolower($search))->get('guild');
    }
	public function getGuildInfo($MultiRealm, $guildid)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->where('guildid',$guildid)->get('guild');
    }
	public function getGuildMembers($MultiRealm, $guildid)
    {
		$this->multirealm = $MultiRealm;
		$this->multirealm->select('a.guid,a.name,a.race,a.class,a.level,b.guildid');
		$this->multirealm->from('characters a');
		$this->multirealm->join('guild_member b', 'a.guid = b.guid', 'left'); 
		$this->multirealm->where('guildid',$guildid);
		return $this->multirealm->get();        
    }
	public function getLogros($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('guid')->where('guid',$id)->get('character_achievement')->num_rows();
    }
}