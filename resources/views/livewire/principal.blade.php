@section('title', 'Principal')
<div class="container-fluid mt-2">
    <div class="row">
        {{-- card --}}
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-block  bg-danger">
                    <div class="row align-items-center">
                        <div class="col-8 text-center">
                            <h4>50</h4>
                            <h6>Estudiantes</h6>
                        </div>
                        <div class="col-4 text-center" style="font-size: 30px">
                            <i class="fa-solid fa-user" ></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <p class="">100% change</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-block  bg-danger">
                    <div class="row align-items-center">
                        <div class="col-8 text-center">
                            <h4>50</h4>
                            <h6>Licencias</h6>
                        </div>
                        <div class="col-4 text-center">
                            <i class="fa-solid fa-user" style="font-size: 30px"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <p class="">100% change</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- estadisticas --}}
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Visitors</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i>
                            </li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div id="visitor" style="height: 300px; overflow: hidden; text-align: left;">
                        <div class="amcharts-main-div" style="position: relative; width: 100%; height: 100%;">
                            <div class="amChartsLegend amcharts-legend-div"
                                style="overflow: hidden; position: relative; text-align: left; width: 1007px; height: 48px; cursor: default;">
                                <svg version="1.1"
                                    style="position: absolute; width: 1007px; height: 48px; top: 0.375px; left: -0.208313px;">
                                    <g transform="translate(81,10)">
                                        <path cs="100,100" d="M0.5,0.5 L858.5,0.5 L858.5,37.5 L0.5,37.5 Z"
                                            fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1"
                                            stroke-opacity="0"></path>
                                        <g transform="translate(0,11)">
                                            <g cursor="pointer" aria-label="old Visitor" transform="translate(0,0)">
                                                <path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z"
                                                    fill="#feb798" stroke="#feb798" fill-opacity="1" stroke-width="1"
                                                    stroke-opacity="0.9" transform="translate(16,8)"></path><text
                                                    y="6" fill="#000000" font-family="Verdana" font-size="11px"
                                                    opacity="1" text-anchor="start" transform="translate(37,7)">
                                                    <tspan y="6" x="0">LICENCIAS</tspan>
                                                </text><text y="6" fill="#000000" font-family="Verdana"
                                                    font-size="11px" opacity="1" text-anchor="end"
                                                    transform="translate(192,7)"> </text>
                                                <rect x="32" y="0" width="160.36409759521484"
                                                    height="18" rx="0" ry="0" stroke-width="0"
                                                    stroke="none" fill="#fff" fill-opacity="0.005"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            {{-- CAARD --}}
                            <div class="amcharts-chart-div"
                                style="overflow: hidden; position: relative; text-align: left; width: 1007px; height: 252px; padding: 0px; touch-action: auto; cursor: default;">
                                <svg
                                    version="1.1"style="position: absolute; width: 1007px; height: 252px; top: 0.375px; left: -0.208313px;">
                                    {{-- BARRAS --}}
                                    <g transform="translate(81,20)">
                                        <g>
                                            <g transform="translate(20,201)" aria-label="New visitor Jan 16, 2013 5.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-99.5 L17.5,-99.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="1"
                                                    stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- MARZO --}}
                                            <g transform="translate(90,201)"
                                                aria-label="New visitor Jan 17, 2013 4.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-79.5 L17.5,-79.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{--  ABRIL --}}
                                            <g transform="translate(165,201)"
                                                aria-label="New visitor Jan 19, 2013 8.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-160.5 L17.5,-160.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- MAYO --}}
                                            <g transform="translate(248,201)"
                                                aria-label="New visitor Jan 20, 2013 9.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-180.5 L17.5,-180.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- JUNIO --}}
                                            <g transform="translate(325,201)"
                                                aria-label="New visitor Jan 21, 2013 3.00">
                                                <path cs="100,100"
                                                    d="
                                                    M0.5,0.5 L0.5,
                                                    {{-- tamaño altura --}}
                                                    -100 L17.5,
                                                    -100 L17.5,
                                                    {{-- tamaño --}}
                                                    0.5 L0.5,
                                                    0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                        {{-- JULIO --}}
                                            <g transform="translate(410,201)"
                                                aria-label="New visitor Jan 23, 2013 7.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-140.5 L17.5,-140.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- AGOSTO --}}
                                            <g transform="translate(490,201)"
                                                aria-label="New visitor Jan 24, 2013 9.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-180.5 L17.5,-180.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- SEPTIEMBRE --}}
                                            <g transform="translate(610,201)"
                                                aria-label="New visitor Jan 26, 2013 4.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-79.5 L17.5,-79.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- OCTUBRE --}}
                                            <g transform="translate(695,201)"
                                                aria-label="New visitor Jan 28, 2013 5.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-99.5 L17.5,-99.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                            {{-- MOVIEMBRE --}}
                                            <g transform="translate(780,201)"
                                                aria-label="New visitor Jan 30, 2013 4.00">
                                                <path cs="100,100"
                                                    d="M0.5,0.5 L0.5,-79.5 L17.5,-79.5 L17.5,0.5 L0.5,0.5 Z"
                                                    fill="#fe9365" stroke="#fe9365" fill-opacity="1"
                                                    stroke-width="1" stroke-opacity="0.9"></path>
                                            </g>
                                        </g>
                                    </g>
                                    {{-- BARRAS --}}
                                    {{-- LINEA --}}
                                    <path cs="100,100" d="M0.5,201.5 L858.5,201.5 L858.5,201.5" fill="none"
                                        stroke-width="1" stroke-opacity="0.2" stroke="#000000"
                                        transform="translate(81,20)"></path>
                                    {{-- LINEA --}}
                                    {{-- TEXTO --}}
                                    <g>
                                        <g transform="translate(81,20)" visibility="visible">
                                            <text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(0,213.5)">
                                                <tspan y="6" x="0">FEBRERO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(80,213.5)">
                                                <tspan y="6" x="0">MARZO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(160,213.5)">
                                                <tspan y="6" x="0">ABRIL</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(240,213.5)">
                                                <tspan y="6" x="0">MAYO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(320,213.5)">
                                                <tspan y="6" x="0">JUNIO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(400,213.5)">
                                                <tspan y="6" x="0">JULIO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(480,213.5)">
                                                <tspan y="6" x="0">AGOSTO</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(580,213.5)">
                                                <tspan y="6" x="0">SEPTIEMBRE</tspan>
                                            </text>
                                            <text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(680,213.5)">
                                                <tspan y="6" x="0">OCTUBRE</tspan>
                                            </text>
                                            <text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="start"
                                                transform="translate(760,213.5)">
                                                <tspan y="6" x="0">NOVIEMBRE</tspan>
                                            </text>
                                        </g>
                                        <g transform="translate(81,20)" visibility="visible"><text y="6"
                                                fill="#000000" font-family="Verdana" font-size="11px" opacity="1"
                                                text-anchor="end" transform="translate(-12,199.8333330154419)">
                                                <tspan y="6" x="0">0</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="end"
                                                transform="translate(-12,159.8333330154419)">
                                                <tspan y="6" x="0">20</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="end"
                                                transform="translate(-12,119.8333330154419)">
                                                <tspan y="6" x="0">40</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="end"
                                                transform="translate(-12,78.8333330154419)">
                                                <tspan y="6" x="0">60</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="end"
                                                transform="translate(-12,38.833333015441895)">
                                                <tspan y="6" x="0">80</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="11px" opacity="1" text-anchor="end"
                                                transform="translate(-12,-1.1666669845581055)">
                                                <tspan y="6" x="0">100</tspan>
                                            </text><text y="6" fill="#000000" font-family="Verdana"
                                                font-size="12px" opacity="1" font-weight="bold"
                                                text-anchor="middle" transform="translate(-60,101) rotate(-90)">
                                                <tspan y="6" x="0">Visitors</tspan>
                                            </text>
                                        </g>
                                    </g>
                                    {{-- TEXTO --}}
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
