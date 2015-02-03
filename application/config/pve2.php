<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
$config = array(
	'host'	=> 'localhost',
	'user'	=> 'root',
	'realm'	=> 'pve',
	'pass'	=> 'root',
);
 */

$config = array(
	'name'	=> $_SERVER['PVE_NAME'],
	'host'	=> $_SERVER['PVE_HOST'],
	'user'	=> $_SERVER['PVE_USER'],
	'realm'	=> $_SERVER['PVE_REALM'],
	'pass'	=> $_SERVER['PVE_PASS'],
);

$config['uris'] = array(
	'access' => (object)array(),
	'access/acl' => array(),
	'access/domains' => array(),
	'access/domains/:obj:' => array(),
	'access/groups' => array(),
	'access/groups/:obj:' => array(),
	'access/password' => array(),
	'access/roles' => array(),
	'access/roles/:obj:' => array(),
	'access/ticket' => array(),
	'access/users' => array(),
	'access/users/:obj:' => array(),
	'cluster' => (object)array(),
	'cluster/backup' => array(),
	'cluster/backup/:obj:' => array(),
	'cluster/ha' => (object)array(),
	'cluster/ha/changes' => array(),
	'cluster/ha/config' => (object)array(),
	'cluster/ha/groups' => array(),
	'cluster/ha/groups/:obj:' => array(),
	'cluster/log' => (object)array(),
	'cluster/nextid' => (object)array(),
	'cluster/options' => array(),
	'cluster/resources' => (object)array(
		'type' => array(
			'type' => 'select',
			'label' => 'Filter By Resource Type: ',
			'options' => array(
				array(
					'label' => '- Everything -',
					'val' => ''
				),
				array(
					'label' => 'Nodes',
					'val' => 'node'
				),
				array(
					'label' => 'Virtual Machines (VM/CT)',
					'val' => 'vm'
				),
				array(
					'label' => 'Storage',
					'val' => 'storage'
				),
			),
		),
	),
	'cluster/status' => (object)array(),
	'cluster/tasks' => (object)array(),
	'nodes' => (object)array(),
	'nodes/:node:' => (object)array(),
	'nodes/:node:/aplinfo' => array(
		'storage' => array(
			'type' => 'select',
			'label' => 'Target Storage: ',
			'autoOptions' => 's.storage as s.storage for s in storageList[host]',
		),
		'template' => array(
			'type' => 'text',
			'label' => 'Template to Download: ',
		),
	),
	'nodes/:node:/bootlog' => (object)array(),
	'nodes/:node:/dns' => array(),
	'nodes/:node:/netstat' => (object)array(),
	'nodes/:node:/network' => array(),
	'nodes/:node:/network/:obj:' => array(),
	'nodes/:node:/openvz' => array(),
	'nodes/:node:/openvz/:obj:' => array(),
	'nodes/:node:/openvz/:obj:/config' => array(),
	'nodes/:node:/openvz/:obj:/initlog' => (object)array(),
	'nodes/:node:/openvz/:obj:/migrate' => array(),
	'nodes/:node:/openvz/:obj:/rrd' => (object)array(),
	'nodes/:node:/openvz/:obj:/rrddata' => (object)array(),
	'nodes/:node:/openvz/:obj:/status' => (object)array(),
	'nodes/:node:/openvz/:obj:/status/current' => (object)array(),
	'nodes/:node:/openvz/:obj:/status/mount' => array(),
	'nodes/:node:/openvz/:obj:/status/shutdown' => array(),
	'nodes/:node:/openvz/:obj:/status/start' => array(),
	'nodes/:node:/openvz/:obj:/status/stop' => array(),
	'nodes/:node:/openvz/:obj:/status/ubc' => (object)array(),
	'nodes/:node:/openvz/:obj:/status/umount' => array(),
	'nodes/:node:/openvz/:obj:/vncproxy' => array(),
	'nodes/:node:/qemu' => array(),
	'nodes/:node:/qemu/:obj:' => array(),
	'nodes/:node:/qemu/:obj:/clone' => array(),
	'nodes/:node:/qemu/:obj:/config' => array(),
	'nodes/:node:/qemu/:obj:/feature' => (object)array(),
	'nodes/:node:/qemu/:obj:/migrate' => array(),
	'nodes/:node:/qemu/:obj:/monitor' => array(),
	'nodes/:node:/qemu/:obj:/resize' => array(),
	'nodes/:node:/qemu/:obj:/rrd' => (object)array(),
	'nodes/:node:/qemu/:obj:/rrddata' => (object)array(),
	'nodes/:node:/qemu/:obj:/sendkey' => array(),
	'nodes/:node:/qemu/:obj:/snapshot' => array(),
	'nodes/:node:/qemu/:obj:/snapshot/:obj:' => array(),
	'nodes/:node:/qemu/:obj:/snapshot/:obj:/config' => array(),
	'nodes/:node:/qemu/:obj:/snapshot/:obj:/rollback' => array(),
	'nodes/:node:/qemu/:obj:/status' => (object)array(),
	'nodes/:node:/qemu/:obj:/status/current' => (object)array(),
	'nodes/:node:/qemu/:obj:/status/reset' => array(),
	'nodes/:node:/qemu/:obj:/status/resume' => array(),
	'nodes/:node:/qemu/:obj:/status/shutdown' => array(),
	'nodes/:node:/qemu/:obj:/status/start' => array(),
	'nodes/:node:/qemu/:obj:/status/stop' => array(),
	'nodes/:node:/qemu/:obj:/status/suspend' => array(),
	'nodes/:node:/qemu/:obj:/template' => array(),
	'nodes/:node:/qemu/:obj:/unlink' => array(),
	'nodes/:node:/qemu/:obj:/vncproxy' => array(),
	'nodes/:node:/rrd' => (object)array(),
	'nodes/:node:/rrddata' => (object)array(),
	'nodes/:node:/scan' => (object)array(),
	'nodes/:node:/scan/iscsi' => (object)array(),
	'nodes/:node:/scan/lvm' => (object)array(),
	'nodes/:node:/scan/nfs' => (object)array(),
	'nodes/:node:/scan/usb' => (object)array(),
	'nodes/:node:/services' => (object)array(),
	'nodes/:node:/services/:obj:' => (object)array(),
	'nodes/:node:/services/:obj:/reload' => array(),
	'nodes/:node:/services/:obj:/restart' => array(),
	'nodes/:node:/services/:obj:/start' => array(),
	'nodes/:node:/services/:obj:/state' => (object)array(),
	'nodes/:node:/services/:obj:/stop' => array(),
	'nodes/:node:/startall' => array(),
	'nodes/:node:/status' => array(),
	'nodes/:node:/stopall' => array(),
	'nodes/:node:/storage' => (object)array(),
	'nodes/:node:/storage/:obj:' => (object)array(),
	'nodes/:node:/storage/:obj:/content' => array(),
	'nodes/:node:/storage/:obj:/content/:obj:' => array(),
	'nodes/:node:/storage/:obj:/rrd' => (object)array(),
	'nodes/:node:/storage/:obj:/rrddata' => (object)array(),
	'nodes/:node:/storage/:obj:/status' => (object)array(),
	'nodes/:node:/storage/:obj:/upload' => array(),
	'nodes/:node:/subscription' => array(),
	'nodes/:node:/syslog' => (object)array(),
	'nodes/:node:/tasks' => (object)array(),
	'nodes/:node:/tasks/:obj:' => array(),
	'nodes/:node:/tasks/:obj:/log' => (object)array(),
	'nodes/:node:/tasks/:obj:/status' => (object)array(),
	'nodes/:node:/time' => array(),
	'nodes/:node:/ubcfailcnt' => (object)array(),
	'nodes/:node:/version' => (object)array(),
	'nodes/:node:/vncshell' => array(),
	'nodes/:node:/vzdump' => array(),
	'pools' => array(),
	'pools/:obj:' => array(),
	'storage' => array(),
	'storage/:obj:' => array(),
	'version' => (object)array(),
);