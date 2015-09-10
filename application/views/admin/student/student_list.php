<?php $this->load->view('admin/components/page_head'); ?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				
				<li  class="set active">
					<a href="<?php echo site_url('admin/home_admin/')?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/myprofile/')?>" >
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/myfiles/')?>" >
					<i class="icon-briefcase"></i>
					<span class="title">My Files</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/rankings/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/reports/')?>" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/forum_db/')?>" >
					<i class="icon-users"></i>
					<span class="title">Forums</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Eventadmin/')?>" >
					<i class="icon-users"></i>
					<span class="title">event</span>
					<span class="selected"></span>
				
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->






<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Users Request <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"> Teacher List</a>
					</li>
				</ul>
		
			</div>
			<!-- END PAGE HEADER-->


			<!-- header unta neh do -->

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i>Datatable with TableTools
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer"><div class="row" style="display: block;"><div class="col-md-12"><div class="btn-group tabletools-dropdown-on-portlet" style="display: block;"><a class="btn btn-sm default DTTT_button_pdf" id="ToolTables_sample_1_0"><span>PDF</span><div style="position: absolute; left: 0px; top: 0px; width: 44px; height: 28px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_1" src="../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="44" height="28" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=44&amp;height=28" wmode="transparent"></div></a><a class="btn btn-sm default DTTT_button_csv" id="ToolTables_sample_1_1"><span>CSV</span><div style="position: absolute; left: 0px; top: 0px; width: 43px; height: 28px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_2" src="../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="43" height="28" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=43&amp;height=28" wmode="transparent"></div></a><a class="btn btn-sm default DTTT_button_xls" id="ToolTables_sample_1_2"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 51px; height: 28px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_3" src="../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="51" height="28" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=51&amp;height=28" wmode="transparent"></div></a><a class="btn btn-sm default DTTT_button_print" id="ToolTables_sample_1_3" title="View print view"><span>Print</span></a></div></div></div><div class="row" style="display: block;"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="sample_1_length" style="display: block;"><label> <div class="select2-container form-control input-xsmall input-inline" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">5</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select name="sample_1_length" aria-controls="sample_1" class="form-control input-xsmall input-inline select2-offscreen" tabindex="-1" title=""><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records </label></div></div><div class="col-md-6 col-sm-12"><div id="sample_1_filter" class="dataTables_filter" style="display: block;"><label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="sample_1"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 120px;">
									 Photo
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 First Name
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Last Name
								</th>
							</tr>
							</thead>
							<tbody>
					
                  		 <?php if(count($rows)): foreach($rows as $row): ?>
	
							<tr role="row" class="odd">
							
					
								<td class="sorting_1">
									<img src="<?php echo $row->photo;?>"> 
								</td>
								<td>
									<?php echo $row->firstname;?>
								</td>
								<td>
									<?php echo $row->lastname;?>
								</td>
							
							</tr>
									 <?php endforeach; ?>
                      		<?php endif; ?> 
					
						</tbody>
							</table></div><div class="row" style="display: block;"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 10 of 43 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="sample_1_paginate" style="display: block;"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="sample_1" tabindex="0" id="sample_1_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="sample_1" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">5</a></li><li class="paginate_button next" aria-controls="sample_1" tabindex="0" id="sample_1_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
						</div>
					</div>
			</div>







<?php $this->load->view('admin/components/page_tail'); ?>