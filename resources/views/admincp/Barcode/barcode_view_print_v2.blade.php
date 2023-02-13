<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<button onclick="window.print()">Print this page</button>
{{-- <div onbeforeprint="myFunction()" class="container-fluid">
    <div class="row">

        @for ($i=0;$i<= $quantity; $i++)
        <div class="col-6 d-flex justify-content-center">
            <div class="text-center">
            @php
                echo DNS1D::getBarcodeHTML($code, "C128",1.4,22);
                // echo "<br/>";
                echo $name;
            @endphp
            </div>
        </div>
        <hr/>
        @endfor
    </div>
</div> --}}

<table align="center" style="border-spacing: 0.1875in 0in; overflow: hidden !important;">

	<!-- create a new row -->
	<tbody>
        @php
            if($quantity % 2 != 0){
                $quantity = $quantity+2;
            }
        @endphp
        @for ($i=0;$i<= $quantity; $i=$i+2)
            {{-- @php
                if($i == 0){
                    echo '<tr>';
                }
                if($i !=0 && $i % 2 == 0){
                    echo '<tr>';
                }
                if($i == 2){
                    echo '</tr>';
                }
            @endphp --}}
        @if (!($quantity - 1 == $i))
        <tr class="col{{$i}}">
			<td align="center" valign="center">
				<div style="overflow: hidden !important;display: flex; flex-wrap: wrap;align-content: center;width: 4in; height: 1in;">
					<div>
                        @php
                         echo DNS1D::getBarcodeHTML($code, "C128",1.4,22);
                        @endphp
						<span>
							@php
                                echo $name;
                            @endphp
						</span>
					</div>
				</div>
			</td>
            <td align="center" valign="center">
				<div style="overflow: hidden !important;display: flex; flex-wrap: wrap;align-content: center;width: 4in; height: 1in;">
					<div>
                        @php
                         echo DNS1D::getBarcodeHTML($code, "C128",1.4,22);
                        @endphp
						<span>
							@php
                                echo $name;
                            @endphp
						</span>
					</div>
				</div>
			</td>
        </tr>
        @else
        <tr>
			<td align="center" valign="center">
				<div style="overflow: hidden !important;display: flex; flex-wrap: wrap;align-content: center;width: 4in; height: 1in;">
					<div>
                        @php
                         echo DNS1D::getBarcodeHTML($code, "C128",1.4,22);
                        @endphp
						<span>
							@php
                                echo $name;
                            @endphp
						</span>
					</div>
				</div>
			</td>
        </tr>
        @endif

        {{-- @php
            if($i % 2 ==0){
                echo '</tr>';
            }
            if($i == $quantity){
                echo '</tr>';
            }
        @endphp --}}
        @endfor

			{{-- <td align="center" valign="center">
				<div style="overflow: hidden !important;display: flex; flex-wrap: wrap;align-content: center;width: 4in; height: 1in;">
					<div>
						<img style="max-width:90% !important;height: 0.24in !important;"
							src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAeAQMAAACsfyRIAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABZJREFUGJVjuDwxWakwp7SBYZRR2gAALPJv6z6CHSEAAAAASUVORK5CYII=">
						<span>
							3410
						</span>
					</div>
				</div>
			</td> --}}

	</tbody>
</table>


<style>
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}

@media print {
    button
    {
        display:none
    }
}

@media print {
    .col0
    {
        display:none
    }
}

.col0{
    display: none;
}
</style>
