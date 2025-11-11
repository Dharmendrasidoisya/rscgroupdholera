<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8">
		<title>RSC Realty</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('backend/css/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css">

    <!---<link rel="stylesheet" href="https://ckeditor.com/docs/ckeditor5/latest/snippets/examples/full-featured-editor/snippet.css" type="text/css" data-cke="true">--->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  #fr-logo{
	display:none;
	}
 iframe{
    width: 150px;
    height:150px;
  }
</style>

		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('backend/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend/css/prismjs.bundle.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('backend/css/light_1.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend/css/light.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend/css/dark.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend/css/dark_1.css')}}" rel="stylesheet" type="text/css">
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('backend/favicon.png')}}">
    <!-- search-->
    <script src="{{asset('backend/js/code.js')}}"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        @include('backend.layout.header')
       @include('backend.layout.side') 
        @yield('contant')

		<!--begin::Global Config(global config for global JS scripts)-->
	<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('backend/js/plugins.bundle.js')}}"></script>
		<script src="{{asset('backend/js/prismjs.bundle.js')}}"></script>
		<script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('backend/js/engage_code.js')}}"></script>
    <script src="{{asset('backend/js/product.js')}}"></script>
    <script src="js/product.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('backend/js/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('backend/js/widgets.js')}}"></script>
		<!--end::Page Scripts-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#table1').DataTable();
      } );
    </script>

        
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/menu',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function(event) { 
		var numb = 1;
		do {
			CKEDITOR.ClassicEditor.create(document.getElementById("editor" + numb), {
				ckfinder: {
					uploadUrl: '{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}'
				},
				toolbar: {
					items: [
						'exportPDF','exportWord', '|',
						'findAndReplace', 'selectAll', '|',
						'heading', '|',
						'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
						'bulletedList', 'numberedList', 'todoList', '|',
						'outdent', 'indent', '|',
						'undo', 'redo',
						'-',
						'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
						'alignment', '|',
						'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
						'specialCharacters', 'horizontalLine', 'pageBreak', '|',
						'textPartLanguage', '|',
						'sourceEditing'
					],
					shouldNotGroupWhenFull: true
				},
				list: {
					properties: {
						styles: true,
						startIndex: true,
						reversed: true
					}
				},
				heading: {
					options: [
						{ model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
						{ model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
						{ model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
						{ model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
						{ model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
						{ model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
						{ model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
					]
				},
				placeholder: '',
				fontFamily: {
					options: [
						'default',
						'Arial, Helvetica, sans-serif',
						'Courier New, Courier, monospace',
						'Georgia, serif',
						'Lucida Sans Unicode, Lucida Grande, sans-serif',
						'Tahoma, Geneva, sans-serif',
						'Times New Roman, Times, serif',
						'Trebuchet MS, Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif'
					],
					supportAllValues: true
				},
				fontSize: {
					options: ['default', 12, 14, 18, 20, 22, 24, 26, 28, 30, 32],
					supportAllValues: true
				},
				htmlSupport: {
					allow: [
						{
							name: /.*/,
							attributes: true,
							classes: true,
							styles: true
						}
					]
				},
				htmlEmbed: {
					showPreviews: true
				},
				link: {
					decorators: {
						addTargetToExternalLinks: true,
						defaultProtocol: 'https://',
						toggleDownloadable: {
							mode: 'manual',
							label: 'Downloadable',
							attributes: {
								download: 'file'
							}
						}
					}
				},
				mention: {
					feeds: [
						{
							marker: '@',
							feed: [
								'@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
								'@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
								'@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
								'@sugar', '@sweet', '@topping', '@wafer'
							],
							minimumCharacters: 1
						}
					]
				},
				removePlugins: [
					'CKBox',
					'CKFinder',
					'EasyImage',
					'RealTimeCollaborativeComments',
					'RealTimeCollaborativeTrackChanges',
					'RealTimeCollaborativeRevisionHistory',
					'PresenceList',
					'Comments',
					'TrackChanges',
					'TrackChangesData',
					'RevisionHistory',
					'Pagination',
					'WProofreader',
					'MathType'
				]
			})
			.catch(error => {
				console.error('Error initializing CKEditor:', error);
			});
	
			numb++;
		} while (numb < 4);
	});
	</script>
</body>
</html>