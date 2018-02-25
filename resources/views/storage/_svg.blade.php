<svg width="580" height="400" xmlns="http://www.w3.org/2000/svg">

<g>
	<rect id="svg_1" height="362" width="15" y="20" x="545"  fill="#0b82ba"/>
	<rect id="svg_2" height="362" width="15" y="19" x="20"  fill="#0b82ba"/>
	<rect id="svg_3" height="15" width="520" y="323.54241" x="30" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_4" height="15" width="520" y="83.5" x="30" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_5" height="15" width="520" y="162.5" x="30" fill-opacity="null"  fill="#0b82ba"/>
	<rect id="svg_6" height="15" width="520" y="240.53447" x="30" fill-opacity="null"  fill="#0b82ba"/>
	
	@for( $i = 0; $i < 6; $i++)
	<rect class="good"  data-type="30412-5212{{$i}}" data-name="接头" data-num="2{{$i}}"   height="35" width="45" y="48" x="{{$i *(45 +2) +34.5}}" stroke-opacity="null" stroke="#000" fill="#FABA6F"></rect>
	@endfor
</g>
</svg>
