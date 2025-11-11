@extends('frontend.layout.master')
@section('content')
<div class="body">
				

    <div role="main" class="main">

        <section class="page-header page-header-modern bg-primary custom-page-header">

            <div class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">
               
            </div>

            <style>
                .py-34{
                    padding-top: 13rem!important;
                    padding-bottom: 5rem!important;
                }
            </style>

            <div class="container position-relative  ">
                <div class="row h-100">
                    <div class="col align-self-end">
                        
                        <ul class="breadcrumb breadcrumb-light d-block py-34 ">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Plots</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>	
    </div>	

    <style>
    

  
    table{
        text-align: center;
    }
    tr{
        background-color:#606060;
    }
    th{
        color: #fff;
    width: 50%;
    padding: 4px;
    border: 1px solid #dddddd;

    }
    table tr th input{
        width: 100%;
        padding: 6px;
    }
    input:focus-visible {
        outline: none !important;
}
.tooltip1 {
    position: relative;
    display: inline-block;

}
.ploat{
    border-bottom: 1px dotted black;
    width: 100px;
    background-color: gray;
    color: #fff;
    padding: 3px 10px;
    margin-right: 3px;
    margin-top: 3px;
    text-align: center;
    border-bottom: 1px dotted gray;

}
.sold{
    border-bottom: 1px dotted black;
    width: 100px;
    background-color: red;
    color: #fff;
    padding: 3px 10px;
    margin-right: 3px;
    margin-top: 3px;
    text-align: center;
    border-bottom: 1px dotted red;

}
.ploat1{
    border-bottom: 1px dotted black;
    width: 100px;
    background-color: #22a03f;
    color: #fff;
    padding: 3px 10px;
    margin-right: 3px;
    margin-top: 3px;
    text-align: center;
    border-bottom: 1px dotted #22a03f;

}
.ploat2{
    border-bottom: 1px dotted black;
    width: 100px;
    background-color: yellow;
    color: #000;
    padding: 3px 10px;
    margin-right: 3px;
    margin-top: 3px;
    text-align: center;
    border-bottom: 1px dotted yellow;

}

.hold1{
    color:#000 !important;
}

.tooltip1 .tooltiptext p{
    color: #fff;  
}

.tooltip1 .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color:#000000;
  color: #000;
  border-radius: 6px;
  padding: 5px 0;
  margin-top: 0px;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  text-align: left;
    font-size: 14px;
    padding-left: 10px;

}

.tooltip1:hover .tooltiptext {
  visibility: visible;
}
.tooltiptext .book{
    background-color: gray;
    padding: 10px;
    margin-right: 10px;
    color: #fff;
}
.tooltiptext .book1 {
    background-color: #22a03f;
    padding: 10px;
    margin-right: 10px;
    color: #fff;
}
.tooltiptext .hold1 {
    background-color: yellow;
    padding: 10px;
    margin-right: 10px;
    color: #000;
}
.tooltiptext .sold1 {
    background-color: red;
    padding: 10px;
    margin-right: 10px;
    color: #000;
}
.mtb-40{
    margin-top: 40px;
    margin-bottom: 40px;
}
.input::placeholder{
				color: #000 !important;
			}
    .available{
        background-color: green;
    padding: 3px 35px;
    margin-right: 10px;
}
    .booked{
        background-color: gray;
    padding: 3px 35px;
    margin-right: 10px;
}
.sold1{
    background-color: red;
padding: 3px 15px;
margin-right: 10px;
}
.sold3{
    background-color: red;
padding: 3px 35px;
margin-right: 10px;
}
.sold{
    background-color: red;
padding: 3px 10px;
margin-right: 10px;
}
.hold{
    background-color: yellow;
    padding: 3px 35px;
    margin-right: 10px;
    }
</style>
    <div class="body_wrap mtb-40">
        <div class="page_wrap">
            <div class="page_content_wrap mtb-80" >
                <div class="content">
                    <section class="no-col-padding" style="margin-bottom: 32px;">
                        <div class="container" >
                            <h4 style="text-align: center; ">Residential Plots, Villas & Bungalows <br> <strong >3 BHK & 4 BHK</strong></h4>
                            <!-- <img src="{{asset('frontend/ploat.jpg')}}" style=" width: 100%;"> -->
                          @foreach($plots as $plot)
                        @if($plot->status=='1')
                            <img loading="lazy" src="{{asset('uploads/plot/'.$plot->menu_name)}}" style="width: 100%; margin-top:10px;">
                            @endif
                @endforeach
                        </div>
                    </section>
                    <section class="no-col-padding" style="margin-bottom: 32px;">
                        <div class="container" >
                        <div class="row" >
                           <p style="margin: 0 0 6px;"> <span class="available"></span><strong> Available</strong></p>
                           <p style="margin: 0 0 6px;"> <span class="booked"></span><strong> Booked</strong></p>
                           <p style="margin: 0 0 6px; display:none" > <span class="sold3"></span><strong> Sold</strong></p>
                           <p style="margin: 0 0 6px;"> <span class="hold"></span><strong> Hold</strong></p>
                            </div>
                            <div class="row" >
                               
                                 @foreach($string as $strings)
                                 @if($strings['PlotStatus']==0)
                                <div class="ploat1 tooltip1" >{{$strings['ProductName']}}
                                    <div class="tooltiptext">
                                        
                                        <p class="book1">Status- Available</p>
                                        <p>Plot.No- {{$strings['ProductName']}}</br>
                                        Area- {{$strings['AreaSQY']}}Sq. Yard
                                        <br>Area- {{$strings['AreaSQF']}} Sq. Feet</p>
                                    </div>
                                </div>
                                @elseif($strings['PlotStatus']==1)
                                <div class="ploat tooltip1" >{{$strings['ProductName']}}
                                    <div class="tooltiptext">
                                        
                                        <p class="book">Status- Booked</p>
                                        <p>Plot.No- {{$strings['ProductName']}}</br>
                                        Area- {{$strings['AreaSQY']}}Sq. Yard
                                        <br>Area- {{$strings['AreaSQF']}} Sq. Feet</p>
                                    </div>
                                </div>
                                @elseif($strings['PlotStatus']==2)
                               
                                <div class="sold tooltip1" >{{$strings['ProductName']}}
                                    <div class="tooltiptext">
                                        
                                        <p class="sold1">Status- Sold</p>
                                        <p>Plot.No- {{$strings['ProductName']}}</br>
                                        Area- {{$strings['AreaSQY']}}Sq. Yard
                                        <br>Area- {{$strings['AreaSQF']}} Sq. Feet</p>
                                    </div>
                                </div> 
                                @elseif($strings['PlotStatus']==3)
                          
                               
                               <div class="ploat2 tooltip1" >{{$strings['ProductName']}}
                                   <div class="tooltiptext">
                                       
                                       <p class="hold1">Status- Hold</p>
                                       <p>Plot.No- {{$strings['ProductName']}}</br>
                                       Area- {{$strings['AreaSQY']}}Sq. Yard
                                       <br>Area- {{$strings['AreaSQF']}} Sq. Feet</p>
                                   </div>
                               </div>
                               @else
                                @endif
                                @endforeach
                                
                            
                        </div>
                    </section>
                    <form method="post" action="{{route('plot.store')}}">
                    <section class="no-col-padding" style="margin-bottom: 32px;">
                   
                        <div class="container" >
                            <h4 class="text-center">Offer Letter</h4>
                            
							@csrf
                            <div class="row" >
                               
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th><input  name="name" class="input" placeholder="Enter Name"></th>
                                    </tr>
                                    <tr>
                                        <th>Contact No.</th>
                                        <th><input name="phone_no" class="input" placeholder="Enter Contact Number"></th>
                                    </tr>
                                    <tr>
                                        <th>Email.ID</th>
                                        <th><input name="email" class="input" placeholder="Enter Email ID"></th>
                                    </tr>
                                </table>
                                
                            </div>
                           
                            <br>
                            
                            <div class="row" >
                                <table>
                                    
                                    <tr>
                                        <th>Select Plot No.</th>
                                        <th>
                                            <select name="plot_no" id="plotDropdown" class="form-control select" data-rule-required="true" >
                                            <option value="">Select Plot</option>
                                            @foreach($string as $strings)
                                            @if($strings['PlotStatus']=='0')
                                            <option value="{{$strings['ProductName']}}">{{$strings['ProductName']}}</option>
                                            @endif
                                            @endforeach
                                            </select>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            
                            <div class="row" id="dataDisplay">
                                <table>
                                    
                                    <tr>
                                        <th rowspan="2" style="  width: 14%">Plot Area</th>
                                        <th style=" width: 43%">Sq. Yard</th>
                                        <th style=" width: 43%">Sq. Feet</th>
                                    </tr>
                                    <tr>
                                        <th><input id="psyard" name="plot_area_sqy" value="0000" readonly></th>
                                        <th><input value="0000" name="plot_area_sqf" readonly></th>
                                    </tr>
                                </table>
                            </div>
                            <br>
                           
                            <!-- <br>
                            <div class="row" >
                                <table>
                                    
                                    <tr>
                                        <th>Total Payment</th>
                                        <th> <input name="plot_price_sqy" value="0000"></th>
                                    </tr>
                                    <tr>
                                    <th >Advance payment</th>
                                        <th><input name="advance" value="0000"></th>
                                    </tr>
                                </table> -->
                                <button type="submit" value="Submit" class="btn" style="background-color:#EC3237;color:#fff;">Submit</button>
                            </div>
                            
                        </div>
                        
                     
                    </section>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url({{asset('frontend/imgnew/abc.jpg')}}); background-size: cover; background-position: center;">
        <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
                    <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        Connecting is a click away,<br/>
                        Reach out to us today.
                    </h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                    <a href="{{route('contactus')}}" class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
                </div>
            </div>
        </div>
    </section>

			
</div>

    <script src="script.js"></script>

    <script>
        // Function to fetch data from the API based on the selected country code
function fetchData(ProductName) {
    fetch(`https://crm.rscrealtydholera.com/plots?companycode=E62D13E9?${ProductName}`)
        .then(response => response.json())
        .then(dataArray => {

            const selectedElement = dataArray.find(item => item.ProductName === ProductName);

            // Update the UI with the fetched data
            const dataDisplay = document.getElementById('dataDisplay');
         
            dataDisplay.innerHTML = `
                                    <table>
                                    
                                    <tr>
                                        <th rowspan="2" style="  width: 14%">Plot Area</th>
                                        <th style=" width: 43%">Sq. Yard</th>
                                        <th style=" width: 43%">Sq. Feet</th>
                                    </tr>
                                    <tr>
                                        <th><input name="plot_area_sqy" value="${selectedElement.AreaSQY}" readonly></th>
                                        <th><input name="plot_area_sqf" value="${selectedElement.AreaSQY * 9}" readonly></th>
                                    </tr>
                                </table>
                                <table>
                                    
                                    <tr>
                                        <th rowspan="2" style="  width: 14%">Price</th>
                                        <th style=" width: 43%">per sq. yard</th>
                                        <th style=" width: 43%">per sq. Feet</th>
                                    </tr>
                                    <tr>
                                        <th><input name="plot_price_sqy" value="${selectedElement.AreaSQY}"  readonly></th>
                                        <th><input name="plot_price_sqf"  value="${selectedElement.AreaSQY * 9}" readonly></th>
                                    </tr>
                                </table>
                                <table>
                                    
                                    <tr>
                                        <th>Total Payment</th>
                                        <th> <input name="total_payment" value="${selectedElement.AreaSQY * 9}" readonly></th>
                                    </tr>
                                    <tr>
                                    <th >Advance payment</th>
                                        <th><input name="advance_payment" value="${selectedElement.AreaSQY * 9}" readonly></th>
                                    </tr>
                                </table>
                                
                                <p style="display:none">ProductName: ${selectedElement.ProductName}</p>
                                <p style="display:none">AreaSQY: ${selectedElement.AreaSQY}</p>
                                <p style="display:none">AreaSQM: ${selectedElement.AreaSQM}</p>
                                <p style="display:none">AreaSQF: ${selectedElement.AreaSQF}</p>
                                <p style="display:none">CustomerName: ${selectedElement.CustomerName}</p>
                                <p style="display:none">PlotStatus: ${selectedElement.PlotStatus}</p>`
                                ;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Event listener for the dropdown selection
document.getElementById('plotDropdown').addEventListener('change', function() {
    const ProductName = this.value;
    
    if (ProductName) {
        fetchData(ProductName);
    } else {
        // Clear the data display if no option is selected
        const dataDisplay = document.getElementById('dataDisplay');
        dataDisplay.innerHTML = '';
    }
});

    </script>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
		</script>
<script>

$(document).ready(function(){

// Save all selects' id in an array 
// to determine which select's option and value would be changed
// after you select an option in another select.
var selectors = ['plot_no', 'psyard']

$('.select').on('change', function() {

var index = selectors.indexOf(this.id)
var value = this.value;
$(next).val($(next).find("input").val()).change();


// check if is the last one or not
if (index < selectors.length - 1) {
var next = $('#' + selectors[index + 1])

// // Show all the options in next select
// // $(next).find('input').show()
// // if (value != "") {
// //   // if this select's value is not empty
// //   // hide some of the options 
// //   $(next).find('input [data-value!=' + value + ']').hide()
// // }

// // set next select's value to be the first option's value 
// // and trigger change()
$(next).val($(next).find("input").val()).change()
}
})
});
</script>
@endsection