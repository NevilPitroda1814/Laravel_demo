@extends('layouts.app')
@section('content')
        <!-- Main Container-->
        <div class="container-fluid main_containe mt-5 ">
            
            <!-- header text -->
            <div class="header row m-2">
                <h3 class="col-sm-8 fw-bold ">Ecommerce</h3>
                <div class="col-sm-4 d-flex p-2 text-primary">
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#336efd" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg>
                    <p><b>&nbsp;&nbsp; /&nbsp;&nbsp; Dashboard &nbsp;&nbsp;/&nbsp;&nbsp; </b> Ecommerce</p>
                </div>
            </div>

            <!-- sales -->
            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card m-2">
                        <div class="card-header p-0" style="background-color:#6362e7;">
                            <h3 class="fw-bold m-2 text-white">Sales State</h3>
                            <svg id="SvgjsSvg1643" width="100%" height="142" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1645" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, 0)"><defs id="SvgjsDefs1644"><clipPath id="gridRectMaskvq8u9ly2"><rect id="SvgjsRect1650" width="446" height="162" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskvq8u9ly2"><rect id="SvgjsRect1651" width="441" height="161" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1657" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1658" flood-color="#000000" flood-opacity="0.35" result="SvgjsFeFlood1658Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1659" in="SvgjsFeFlood1658Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1659Out"></feComposite><feOffset id="SvgjsFeOffset1660" dx="10" dy="2" result="SvgjsFeOffset1660Out" in="SvgjsFeComposite1659Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1661" stdDeviation="6 " result="SvgjsFeGaussianBlur1661Out" in="SvgjsFeOffset1660Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1662" result="SvgjsFeMerge1662Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1663" in="SvgjsFeGaussianBlur1661Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1664" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1665" in="SourceGraphic" in2="SvgjsFeMerge1662Out" mode="normal" result="SvgjsFeBlend1665Out"></feBlend></filter></defs><line id="SvgjsLine1649" x1="0" y1="0" x2="0" y2="157" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="157" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1666" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1667" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1676" class="apexcharts-grid"><g id="SvgjsG1677" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1678" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1680" x1="0" y1="157" x2="437" y2="157" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1679" x1="0" y1="1" x2="0" y2="157" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1652" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1653" class="apexcharts-series" seriesName="Desktops" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1656" d="M 0 125.6C 25.491666666666667 125.6 47.341666666666676 83.73333333333333 72.83333333333334 83.73333333333333C 98.32500000000002 83.73333333333333 120.17500000000001 101.17777777777778 145.66666666666669 101.17777777777778C 171.15833333333336 101.17777777777778 193.00833333333333 10.466666666666669 218.5 10.466666666666669C 243.99166666666667 10.466666666666669 265.8416666666667 69.77777777777779 291.33333333333337 69.77777777777779C 316.82500000000005 69.77777777777779 338.675 48.844444444444434 364.1666666666667 48.844444444444434C 389.65833333333336 48.844444444444434 411.5083333333333 69.77777777777779 437 69.77777777777779" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskvq8u9ly2)" filter="url(#SvgjsFilter1657)" pathTo="M 0 125.6C 25.491666666666667 125.6 47.341666666666676 83.73333333333333 72.83333333333334 83.73333333333333C 98.32500000000002 83.73333333333333 120.17500000000001 101.17777777777778 145.66666666666669 101.17777777777778C 171.15833333333336 101.17777777777778 193.00833333333333 10.466666666666669 218.5 10.466666666666669C 243.99166666666667 10.466666666666669 265.8416666666667 69.77777777777779 291.33333333333337 69.77777777777779C 316.82500000000005 69.77777777777779 338.675 48.844444444444434 364.1666666666667 48.844444444444434C 389.65833333333336 48.844444444444434 411.5083333333333 69.77777777777779 437 69.77777777777779" pathFrom="M -1 188.4L -1 188.4L 72.83333333333334 188.4L 145.66666666666669 188.4L 218.5 188.4L 291.33333333333337 188.4L 364.1666666666667 188.4L 437 188.4"></path><g id="SvgjsG1654" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1655" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1681" x1="0" y1="0" x2="437" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1682" x1="0" y1="0" x2="437" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1683" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1684" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1685" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1648" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1675" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1646" class="apexcharts-annotations"></g></svg>
                        </div>
                        <div class="card-body d-flex text-center overflow-auto">
                            <div class="watch_sale border-end p-3">
                                <h3 class="fw-bold m-0">300</h3>
                                <p class="text-muted">watch sale</p>
                            </div>
                            <div class="watch_sale border-end p-3">
                                <h3 class="fw-bold m-0">1120</h3>
                                <p class="text-muted">Phone sale</p>
                            </div><div class="watch_sale ps-2 pt-3">
                                <h3 class="fw-bold m-0">530</h3>
                                <p class="text-muted">Tablet sale</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card m-2">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold">Invoice Overview</h3>
                        </div>
                        <div class="card-body">
                            <!-- Chart Card -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card m-2">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold">Hot Selling Products</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex border-bottom m-1">
                                <div>
                                    <h6 class="m-0">Dominoes Coffee Table Game</h6>
                                    <p class="text-muted">60k Sales</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <img src="image/rectangle.png" height="50" class="rounded p-1">
                                <div>
                                    <h6 class="m-0">Dominoes Coffee Table Game</h6>
                                    <p class="text-muted">60k Sales</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <img src="image/rectangle.png" height="50" class="rounded p-1">
                                <div>
                                    <h6 class="m-0">Dominoes Coffee Table Game</h6>
                                    <p class="text-muted">60k Sales</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <img src="image/rectangle.png" height="50" class="rounded p-1">
                                <div>
                                    <h6 class="m-0">Dominoes Coffee Table Game</h6>
                                    <p class="text-muted">60k Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row m-2">
                <div class="col-sm-6">
                    <div class="card m-2">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold m-2">Recent Order</h3>
                        </div>
                        <div class="card-body p-0 overflow-auto">
                            <table class="table">
                                <tr class="bg-light">
                                    <th colspan="2">Product Name</th>
                                    <th>Customer</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                                <tr class="p-0 m-1">
                                    <td><img class="bg-light rounded p-1" src="image/shoe.png"></td>
                                    <td><h6 class="m-0">Nike Sports NK</h6><p class="text-muted">Free delivery</p></td>
                                    <td><h6 class="m-0">Harold More</h6><p class="text-muted">UK Desig Team</p></td>
                                    <td><h6 class="m-0">$99.85</h6><p class="text-muted">Nok</p></td>
                                    <td><h6>20</h6></td>
                                    <td><h6 class="text-primary bg-light p-1 rounded">Done</h6></td>
                                </tr>
                                <tr class="p-0 m-1">
                                    <td><img class="bg-light rounded p-1" src="image/shoe.png"></td>
                                    <td><h6 class="m-0">Nike Sports NK</h6><p class="text-muted">Free delivery</p></td>
                                    <td><h6 class="m-0">Harold More</h6><p class="text-muted">UK Desig Team</p></td>
                                    <td><h6 class="m-0">$99.85</h6><p class="text-muted">Nok</p></td>
                                    <td><h6>20</h6></td>
                                    <td><h6 class="text-primary text-danger bg-light p-1 rounded">Rejected</h6></td>
                                </tr>
                                <tr class="p-0 m-1">
                                    <td><img class="bg-light rounded p-1" src="image/shoe.png"></td>
                                    <td><h6 class="m-0">Nike Sports NK</h6><p class="text-muted">Free delivery</p></td>
                                    <td><h6 class="m-0">Harold More</h6><p class="text-muted">UK Desig Team</p></td>
                                    <td><h6 class="m-0">$99.85</h6><p class="text-muted">Nok</p></td>
                                    <td><h6>20</h6></td>
                                    <td><h6 class="text-primary text-danger bg-light p-1 rounded">Rejected</h6></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card m-2">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold m-2">Our Activities</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex border-bottom m-1">
                                <svg class="bg-light rounded p-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#336EFD" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
                                </svg>        
                                <div class="mx-5">
                                    <h6>Win best seller of the year awaed</h6>
                                    <p class="text-muted">Company, San Francisco</p>
                                </div> 
                                <div>
                                    <p class="text-muted bg-light rounded p-1">1 day ago</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <svg class="bg-light rounded p-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffc500" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>        
                                <div class="mx-5">
                                    <h6>Apporved our product in checking</h6>
                                    <p class="text-muted">Elisse joson, San Francisco</p>
                                </div> 
                                <div>
                                    <p class="text-muted bg-light rounded p-1">2 week ago</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <svg class="bg-light rounded p-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#7dc006" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                                </svg>        
                                <div class="mx-5">
                                    <h6>Win best seller of the year awaed</h6>
                                    <p class="text-muted">Company, San Francisco</p>
                                </div> 
                                <div>
                                    <p class="text-muted bg-light rounded p-1">3 day ago</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom m-1">
                                <svg class="bg-light rounded p-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ff8a3e" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                    <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                                </svg>        
                                <div class="mx-5">
                                    <h6>Apporved our product in checking</h6>
                                    <p class="text-muted">35k Sales</p>
                                </div> 
                                <div>
                                    <p class="text-muted bg-light rounded p-1">2 hource ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue  -->
            <div class="row m-2">
                <div class="col-sm-6">
                    <div class="card m-2">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold m-2">Revenue By Category</h3>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card m-2">
                        <div class="card-body carousel carousel-dark slide" id="slider" data-ride="carousel">
                            <div class="carousel-indicators m-2">
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="bg-primary active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" class="bg-primary" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <img src="image/img_shoe.png" alt="">
                                    <p class="text-muted fw-bold m-3">Special Discount <span class="text-primary">70% OFF</span></p>
                                    <h4>Deal of the Day from <span class="text-primary">$75</span></h4>
                                    <div class="d-flex mx-5">
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">0-490</h6>
                                            <p>Day</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">03</h6>
                                            <p>hours</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">20</h6>
                                            <p>Min</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">15</h6>
                                            <p>Sec</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="image/img_shoe.png" alt="">
                                    <p class="text-muted fw-bold m-3">Special Discount <span class="text-primary">70% OFF</span></p>
                                    <h4>Deal of the Day from <span class="text-primary">$75</span></h4>
                                    <div class="d-flex mx-5">
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">0-490</h6>
                                            <p>Day</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">03</h6>
                                            <p>hours</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">20</h6>
                                            <p>Min</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">15</h6>
                                            <p>Sec</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="image/img_shoe.png" alt="">
                                    <p class="text-muted fw-bold m-3">Special Discount <span class="text-primary">70% OFF</span></p>
                                    <h4>Deal of the Day from <span class="text-primary">$75</span></h4>
                                    <div class="d-flex mx-5">
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">0-490</h6>
                                            <p>Day</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">03</h6>
                                            <p>hours</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">20</h6>
                                            <p>Min</p>
                                        </div>
                                        <div class="m-3 p-3 rounded" style="background-color:#f4f6fd;">
                                            <h6 class="text-primary">15</h6>
                                            <p>Sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cards -->
            <div class="row m-2">
                <div class="col-sm-6">
                    <div class="card" style="background-color:#6362e7;">
                        <div class="card-body d-flex p-4">
                            <div>
                                <h4 class="text-white">Get support 24 hours</h4>
                                <p class="text-white">Check Our new service & feature about sales!</p>
                                <button class="btn btn-outline-light">Interested?</button>
                            </div>
                            <img class="position-absolute end-0 bottom-0" width="150" src="image/support-img.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h3 class="fw-bold m-2">Total Sale</h3>
                        </div>
                        <div class="card-body d-flex p-0">
                            <div style="width:65%;" class="text-bottom m-3">
                                <div class="d-flex aling-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-arrow-down-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0v6z"/>
                                    </svg>
                                    <span class="text-danger">0.45%</span>
                                </div>
                                <h4 class="fw-bold text-primary">680.96</h4>
                            </div>
                            <svg id="SvgjsSvg6087" width="200" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6089" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, 0)"><defs id="SvgjsDefs6088"><clipPath id="gridRectMask7zq0bqke"><rect id="SvgjsRect6094" width="219" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask7zq0bqke"><rect id="SvgjsRect6095" width="214" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter6101" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood6102" flood-color="#6362e7" flood-opacity="0.2" result="SvgjsFeFlood6102Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite6103" in="SvgjsFeFlood6102Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite6103Out"></feComposite><feOffset id="SvgjsFeOffset6104" dx="6" dy="0" result="SvgjsFeOffset6104Out" in="SvgjsFeComposite6103Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur6105" stdDeviation="4 " result="SvgjsFeGaussianBlur6105Out" in="SvgjsFeOffset6104Out"></feGaussianBlur><feMerge id="SvgjsFeMerge6106" result="SvgjsFeMerge6106Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode6107" in="SvgjsFeGaussianBlur6105Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode6108" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend6109" in="SourceGraphic" in2="SvgjsFeMerge6106Out" mode="normal" result="SvgjsFeBlend6109Out"></feBlend></filter></defs><line id="SvgjsLine6093" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG6110" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6111" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG6124" class="apexcharts-grid"><g id="SvgjsG6125" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG6126" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine6128" x1="0" y1="80" x2="210" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine6127" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6096" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG6097" class="apexcharts-series" seriesName="Desktops" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6100" d="M 0 63.33333333333333C 7.35 63.33333333333333 13.65 72 21 72C 28.35 72 34.65 74 42 74C 49.35 74 55.65 69.33333333333333 63 69.33333333333333C 70.35 69.33333333333333 76.65 73.33333333333333 84 73.33333333333333C 91.35 73.33333333333333 97.65 66 105 66C 112.35 66 118.65 43.333333333333336 126 43.333333333333336C 133.35 43.333333333333336 139.65 10.666666666666671 147 10.666666666666671C 154.35 10.666666666666671 160.65 37.333333333333336 168 37.333333333333336C 175.35 37.333333333333336 181.65 33.333333333333336 189 33.333333333333336C 196.35 33.333333333333336 202.65 63.33333333333333 210 63.33333333333333" fill="none" fill-opacity="1" stroke="rgba(99,98,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask7zq0bqke)" filter="url(#SvgjsFilter6101)" pathTo="M 0 63.33333333333333C 7.35 63.33333333333333 13.65 72 21 72C 28.35 72 34.65 74 42 74C 49.35 74 55.65 69.33333333333333 63 69.33333333333333C 70.35 69.33333333333333 76.65 73.33333333333333 84 73.33333333333333C 91.35 73.33333333333333 97.65 66 105 66C 112.35 66 118.65 43.333333333333336 126 43.333333333333336C 133.35 43.333333333333336 139.65 10.666666666666671 147 10.666666666666671C 154.35 10.666666666666671 160.65 37.333333333333336 168 37.333333333333336C 175.35 37.333333333333336 181.65 33.333333333333336 189 33.333333333333336C 196.35 33.333333333333336 202.65 63.33333333333333 210 63.33333333333333" pathFrom="M -1 80L -1 80L 21 80L 42 80L 63 80L 84 80L 105 80L 126 80L 147 80L 168 80L 189 80L 210 80"></path><g id="SvgjsG6098" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6099" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6129" x1="0" y1="0" x2="210" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6130" x1="0" y1="0" x2="210" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6131" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6132" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6133" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect6092" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6123" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6090" class="apexcharts-annotations"></g></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Insert Data Form -->
            

            <footer class="text-center bg-white p-3 m-0">
                <h6>Copyright 2022 © Zeta theme by pixelstrap</h6>
            </footer>
        </div>
@endsection