<?php
/**
 * [ADMIN] PopularBlogPost
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			PopularBlogPost
 * @license			MIT
 */
$this->BcBaser->js(array(
	'admin/jquery.baser_ajax_data_list',
	'admin/jquery.baser_ajax_batch',
	'admin/baser_ajax_data_list_config',
	'admin/baser_ajax_batch_config'
));
?>

<script type="text/javascript">
	$(document).ready(function () {
		$.baserAjaxDataList.init();
		$.baserAjaxBatch.init({url: $("#AjaxBatchUrl").html()});
	});
</script>

<div id="AjaxBatchUrl" style="display:none"><?php $this->BcBaser->url(array('controller' => 'popular_blog_posts', 'action' => 'ajax_batch')) ?></div>
<div id="AlertMessage" class="message" style="display:none"></div>
<div id="MessageBox" style="display:none"><div id="flashMessage" class="notice-message"></div></div>
<div id="DataList"><?php $this->BcBaser->element('popular_blog_posts/index_list') ?></div>
