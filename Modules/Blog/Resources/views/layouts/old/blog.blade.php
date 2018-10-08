<!-- Description -->
<section id="description" class="card">
  <div class="card-header">
	<h4 class="card-title">Description</h4>
  </div>
  <div class="card-content">
	<div class="card-body">
	  <div class="card-text">
		<p>Content layout with detached right sticky sidebar provides more
		  navigations options on page level. For the larger screen this
		  layout provides best usability. This layout use the third column
		  as a sticky sidebar section.</p>
	  </div>
	</div>
  </div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section id="css-classes" class="card">
  <div class="card-header">
	<h4 class="card-title">CSS Classes</h4>
  </div>
  <div class="card-content">
	<div class="card-body">
	  <div class="card-text">
		<p>This table contains all classes related to the content detached
		  right sticky sidebar layout. This is a custom layout classes
		  for content detached right sticky sidebar layout page requirements.</p>
		<p>All these options can be set via following classes:</p>
		<div class="table-responsive">
		  <table class="table table-hover">
			<thead>
			  <tr>
				<th>Classes</th>
				<th>Description</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th scope="row"><code>.content-detached-right-sidebar</code></th>
				<td>You can create 3 column detached right layout by adding
				  <code>.content-detached-right-sidebar</code> class in
				  <code>&lt;body&gt;</code> tag.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>.content-detached</code></th>
				<td>In this layout content section is detached from right sticky
				  sidebar, for that <code>.content-detached</code> class
				  needs to add in content wrapper. Refer HTML markup line
				  no 27.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>.content-left</code></th>
				<td>In this layout content should be float in right side, so
				  <code>.content-left</code> class needs to add in content
				  wrapper. Refer HTML markup line no 27.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>.sidebar-detached</code></th>
				<td>In this layout right sticky sidebar section is detached
				  from content, for that <code>.sidebar-detached</code>                            class needs to add in sidebar wrapper. Refer HTML markup
				  line no 33.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>.sidebar-right</code></th>
				<td>In this layout sidebar should be float in right side, so
				  <code>.sidebar-right</code> class needs to add in sidebar
				  wrapper. Refer HTML markup line no 33.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>.sidebar-sticky</code></th>
				<td>To create sticky sidebar add <code>.sidebar-sticky</code>                            class. Refer HTML markup line no 34.</td>
			  </tr>
			</tbody>
		  </table>
		</div>
	  </div>
	</div>
  </div>
</section>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<section id="html-markup" class="card">
  <div class="card-header">
	<h4 class="card-title">HTML Markup</h4>
	<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
	<div class="heading-elements">
	  <ul class="list-inline mb-0">
		<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
		<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
		<li><a data-action="close"><i class="ft-x"></i></a></li>
	  </ul>
	</div>
  </div>
  <div class="card-content">
	<div class="card-body">
	  <div class="card-text">
		<p>This section contains HTML Markup to create 3 column detached right
		  sticky sidebar layout. You need to add the <code>.content-detached-right-sidebar</code>                    class in the <code>&lt;body&gt;</code> tag as show in below markup
		  on line no 4. This layout has a navigation, content and right
		  detached sidebar sections with common header & footer.</p>
		<ul>
		  <li>
			<span class="text-bold-600">Line no 27:</span> Contain the <code>.content-detached</code>                      and <code>.content-left</code> classes for adjusting detached
			content section in right side.</li>
		  <li>
			<span class="text-bold-600">Line no 33:</span> Contain the <code>.sidebar-detached</code>                      and <code>.sidebar-right</code> classes for adjusting detached
			sidebar section in right side.</li>
		  <li>
			<span class="text-bold-600">Line no 34:</span> Contain the <code>.sidebar-sticky</code>                      class, that will make the detached right sidebar sticky.</li>
		</ul>
		<p>Modern has a ready to use starter kit, you can use this layout
		  directly by using the starter kit pages from the <code>modern-admin/starter-kit</code>                    folder.</p>
		<pre data-line="4, 27, 33, 34" class="language-markup scrollable-container ps-container ps-theme-light ps-active-x"
		data-mcs-theme="minimal-dark">
<code class="language-markup">
  &lt;!DOCTYPE html&gt;
	&lt;html lang="en"&gt;
	  &lt;head&gt;&lt;/head&gt;
	  &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu content-detached-right-sidebar menu-expanded"&gt;
		
		&lt;!-- fixed-top--&gt;
		&lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-dark navbar-shadow navbar-border"&gt;
			...
		&lt;/nav&gt;
		
		&lt;!-- BEGIN Navigation--&gt;
		&lt;div class="main-menu menu-dark menu-fixed menu-shadow"&gt;
			...
		&lt;/div&gt;
		&lt;!-- END Navigation--&gt;
		&lt;!-- BEGIN Content--&gt;
		&lt;div class="content app-content"&gt;
			&lt;div class="content-wrapper"&gt;
				&lt;!-- content header--&gt;
				&lt;div class="content-header row"&gt;
					...
				&lt;/div&gt;
				&lt;!-- content header--&gt;
				
				&lt;!-- content detached right--&gt;
				&lt;div class="content-detached content-left"&gt;
					...
				&lt;/div&gt;
				&lt;!-- content detached right--&gt;
				
				&lt;!-- sidebar detached right--&gt;
				&lt;div class="sidebar-detached sidebar-right"&gt;
					&lt;div class="sidebar sidebar-sticky"&gt;
						...
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;!-- sidebar detached right--&gt;
				
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;!-- END Content--&gt;
		&lt;!-- START FOOTER DARK--&gt;
		&lt;footer class="footer footer-dark"&gt;
			...
		&lt;/footer&gt;
		&lt;!-- START FOOTER DARK--&gt;
	  &lt;/body&gt;
	&lt;/html&gt;
</code>
</pre>
	  </div>
	</div>
  </div>
</section>
<!--/ HTML Markup -->
<!-- PUG Code -->
<section id="pug-code" class="card">
  <div class="card-header">
	<h4 class="card-title">PUG Configuration</h4>
	<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
	<div class="heading-elements">
	  <ul class="list-inline mb-0">
		<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
		<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
		<li><a data-action="close"><i class="ft-x"></i></a></li>
	  </ul>
	</div>
  </div>
  <div class="card-content">
	<div class="card-body">
	  <div class="card-text">
		<p>Modern Admin use PUG as template engine to generate pages and whole
		  template quickly using node js, for getting start with PUG usage
		  & template generating process please refer template documentation.</p>
		<h5 class="card-title mt-2">PUG Variables</h5>
		<p>This table contains required PUG variables to generate 3 column
		  detached right sticky sidebar layout.</p>
		<div class="table-responsive">
		  <table class="table table-hover">
			<thead>
			  <tr>
				<th>Block</th>
				<th>Variable</th>
				<th>Datatype</th>
				<th>Value</th>
				<th>Description</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th scope="row"><code>pageConfig</code></th>
				<td><code>contentLayout</code></td>
				<td><code>string</code></td>
				<td><code>'content-detached-right-sidebar'</code></td>
				<td><code>pageConfig</code> block has a page configuration
				  variables, in that for 3 column layout need to define
				  variable <code>- var contentLayout = 'content-detached-right-sidebar'</code>.</td>
			  </tr>
			  <tr>
				<th scope="row"><code>pageConfig</code></th>
				<td><code>sidebarSticky</code></td>
				<td><code>boolean</code></td>
				<td><code>true</code></td>
				<td>To make right sticky sidebar <code>pageConfig</code> block
				  also require <code>- var sidebarSticky = true</code>                            configuration variables, set value as <code>true</code>                            to enable it.</td>
			  </tr>
			</tbody>
		  </table>
		</div>
		<div class="alert bg-info alert-icon-left mb-2" role="alert">
		  <span class="alert-icon"><i class="la la-info"></i></span>
		  Modern Admin Template <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"
		  target="_blank" class="white"><u>documentation</u></a> has full
		  list of all blocks, datatype, variables and their description
		  table. Please review it for more configuration options.
		</div>
		<h5 class="card-title mt-2">PUG Code</h5>
		<p>To generate content detached right sticky sidebar layout page or
		  template, you need to use following PUG code.</p>
		<ul>
		  <li>
			<span class="text-bold-600">Line no 20-22:</span> You need to set <code>contentLayout</code>                      variable value as <code>'content-detached-right-sidebar'</code>                      in <code>pageConfig</code> block.</li>
		  <li>
			<span class="text-bold-600">Line no 22:</span> You need to set <code>sidebarSticky</code>                      variable value as <code>true</code> in <code>pageConfig</code>                      block to enable right sticky sidebar.</li>
		  <li>
			<span class="text-bold-600">Line no 28-29:</span> <code>content</code> block has content
			section html file included <code>include ../contents/layout-content-detached-right-sticky-sidebar.html</code>,
			which can be customizable on page level.</li>
		  <li>
			<span class="text-bold-600">Line no 31-32:</span> <code>sidebar</code> block has sidebar
			section html file included <code>include ../contents/sidebar-common.html</code>,
			which can be customizable on page level.</li>
		</ul>
		<p>If you want to use this layout on page level you need to define
		  it on page it self. This template has one example pug file for
		  content detached right sticky sidebar <code>content-detached-right-sticky-sidebar.pug</code>,
		  however you can use it on template level but it will generate
		  whole template as a content detached right sticky sidebar.</p>
		<pre data-line="20-22, 28-29, 31-32" data-line-offset="11" class="language-pug">
	<code class="language-pug">
	  block pageVars
		  - var pageTitle    = "Detached Right Sticky Sidebar"
		  - var pageSubTitle = "content layoutDetached right sticky sidebar"
		  - var description  = "The content detached right sticky sidebar layout with navigation, content area and detched right sticky sidebar."
		  - var activeMenu   = "layout-content-detached-right-sticky-sidebar"
	  
	  extends template
	  
	  append pageConfig
		  - var contentLayout = 'content-detached-right-sidebar'
		  - var sidebarSticky = true
	  
	  append breadcrumbs
		  +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"Content detached right sticky sidebar"}])
	  
	  //- Include page content
	  append content
		  include ../contents/layout-content-detached-right-sticky-sidebar.html
	  //- Include page sidebar
	  append sidebar
		  include ../contents/sidebar-common.html
	  
	  //- Vendor CSS
	  //------------------------------
	  //- Add Vendor specific CSS
	  append vendorcss
	  //- Page CSS
	  //------------------------------
	  //- Add custom page specific CSS
	  append pagecss
	  
	  //- Vendor JS
	  //------------------------------
	  //- Add vendor specific JS
	  append vendorjs
	  
	  //- Page JS
	  //------------------------------
	  //- Add custom page specific JS
	  append pagejs
	</code>
	</pre>
	  </div>
	</div>
  </div>
</section>
<!--/ PUG Code -->