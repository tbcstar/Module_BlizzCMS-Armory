<?php 
/**
 * BlizzCMS
 *
 * @author WoW-CMS
 * @copyright Copyright (c) 2019 - 2022, WoW-CMS (https://wow-cms.com)
 * @license https://opensource.org/licenses/MIT MIT License
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class armory extends BS_Controller
{
    public function __construct()
    {
         parent::__construct();
        is_module_installed('armory', true);

        $this->load->model('armory_model');

        $this->load->language('armory');
    }

	public function search()
    {
        $data = array(
            'pagetitle' => 'Armory Search',
			'lang' => $this->lang->lang(),
			'realms' => $this->wowrealm->getRealms()->result()
        );
        $this->template->build('search', $data);
    }
	
	public function index()
    {
        require_permission('view.armory');

        $data = [
            'realms' => $this->realm_model->find_all()
        ];

        $this->template->title(lang('Player Armory'), config_item('app_name'));

        $this->template->build('index', $data);
    }
	public function guild($guildid)
    {
        if (empty($guildid) || is_null($guildid) || $guildid == NULL)
            redirect(base_url(),'refresh');

        $data = array(
			'guildid' => $guildid,
			'pagetitle' => 'Guild Members',
			'lang' => $this->lang->lang(),
			'realms' => $this->wowrealm->getRealms()->result()
        );

        $this->template->build('guild', $data);
    }

	public function result()
    {
		$data = array(
            'pagetitle' => 'Armory Search',
			'lang' => $this->lang->lang(),
			'realms' => $this->wowrealm->getRealms()->result(),
			'search' => $this->input->get('search')
        );
	$search = $this->input->get('search');
    $realm = $this->input->get('realm');

    if (!empty($search) && !empty($realm))
    {
        $MultiRealm = $this->wowrealm->getRealmConnectionData($realm);

        $data['chars'] = $this->armory_model->searchchar($MultiRealm, $search);
        $data['guild'] = $this->armory_model->searchguild($MultiRealm, $search);
    }
		$this->template->build('result', $data);
	}
}
