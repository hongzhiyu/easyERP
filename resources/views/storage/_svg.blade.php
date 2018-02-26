<svg width="580" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580 400">

<g>
	<rect id="svg_1" height="350" width="20" y="30" x="60"  fill="#0b82ba"/>
	<rect id="svg_2" height="350" width="20" y="30" x="500"  fill="#0b82ba"/>
	<rect id="svg_3" height="15" width="210" y="84" x="80" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_4" height="15" width="210" y="160" x="80" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_5" height="15" width="210" y="245" x="80" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_6" height="15" width="210" y="324" x="80" fill-opacity="null"  fill="#0b82ba"/>
	
	@for( $i = 0; $i < 6; $i++)
	<rect class="good"  data-type="30412-5212{{$i}}" data-name="接头" data-num="2{{$i}}"   height="35" width="45" y="48" x="{{$i *(45 +2) +80}}" stroke-opacity="null" stroke="#000" fill="#FABA6F"></rect>
	{{-- <text x="{{$i *(45 +2) +80+22.5}}" y="{{48+17.5}}"  font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="middle" xml:space="preserve">30412-5212</text> --}}
	@endfor
	@for( $i = 0; $i < 6; $i++)
	<rect class="good"  data-type="30412-5212{{$i}}" data-name="接头" data-num="2{{$i}}"   height="35" width="45" y="125" x="{{$i *(45 +2) +80}}" stroke-opacity="null" stroke="#000" fill="#FABA6F"></rect>
	{{-- <text x="{{$i *(45 +2) +80+22.5}}" y="{{48+17.5}}"  font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="middle" xml:space="preserve">30412-5212</text> --}}
	@endfor
	@for( $i = 0; $i < 6; $i++)
	<rect class="good"  data-type="30412-5212{{$i}}" data-name="接头" data-num="2{{$i}}"   height="35" width="45" y="210" x="{{$i *(45 +2) +80}}" stroke-opacity="null" stroke="#000" fill="#FABA6F"></rect>
	{{-- <text x="{{$i *(45 +2) +80+22.5}}" y="{{48+17.5}}"  font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="middle" xml:space="preserve">30412-5212</text> --}}
	@endfor
	@for( $i = 0; $i < 6; $i++)
	<rect class="good"  data-type="30412-5212{{$i}}" data-name="接头" data-num="2{{$i}}"   height="35" width="45" y="289" x="{{$i *(45 +2) +80}}" stroke-opacity="null" stroke="#000" fill="#FABA6F"></rect>
	{{-- <text x="{{$i *(45 +2) +80+22.5}}" y="{{48+17.5}}"  font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="middle" xml:space="preserve">30412-5212</text> --}}
	@endfor
</g>
</svg>
