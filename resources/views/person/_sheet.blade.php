
<div class="panel panel-default">
		<div class="panel-heading">考勤表</div>
		<div class="panel-body">
<p>{{ $personname}}</p>
<p>{{ $days}}</p>
<table  class="table table-hover table-condensed  table-bordered">
	<thead>
	<tr>
		<th>日</th>
		<th>上午__上班</th>
		<th>上午__下班</th>
		<th>下午__上班</th>
		<th>下午__下班</th>
		<th>加班__上班</th>
		<th>加班__下班</th>
	</tr>
	</thead>

	<tbody>
	
		{{-- @foreach($sheetarr as $key=>$day)
		<tr>
			<td >{{ $key+1}}</td>
			@foreach($day as $time)
				@if ( !$time[ 1 ])
					<td class="warning">{{ $time[0]}}</td>
				@else
					<td >{{ $time[0]}}</td>
				@endif
			@endforeach
		</tr>
		@endforeach --}}

		@for ( $i = 0; $i <$days; $i++)
			<tr>
				<td >{{ $i + 1}}</td>
				@if ( isset( $sheetarr[ $i ]))
					@for( $j = 0; $j < 6; $j++)
						{{-- @if( isset($sheetarr[ $i ][ $j ]) )
							@if( $sheetarr[ $i ][ $j ][0] )
								<td >{{ $sheetarr[ $i ][ $j ][0]}}</td>
							@else
								<td class="warning">{{ $sheetarr[ $i ][ $j ][0]}}</td>
							@endif
						@else
							<td>null</td>
						@endif --}}
						{{-- <td> {{ $sheetarr[ $i ][ $j ][0]}}</td> --}}
						@if( isset($sheetarr[ $i ][$j ]) )
							@if( $sheetarr[ $i ][ $j ][1] )
								<td >{{ $sheetarr[ $i ][ $j ][0]}}</td>
							@else
								<td class="warning">{{ $sheetarr[ $i ][ $j ][0]}}</td>
							@endif
						@else
							<td></td>
						@endif
					@endfor
				@else
				<td></td>
				@endif
			</tr>
		@endfor
	</tbody>
</table>
</div>
</div>
<script >
	$('.warning').on( 'click', function ( ){
		$( this ).toggleClass( 'warning' );
	});
</script>


