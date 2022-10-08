'use strict';

function addTextNode(text) {
	document.getElementById('p1').textContent = text;
}

const e = document.getElementById('button');
e.addEventListener('click', () => {
	let result = window.confirm("CLICK COMPLETE");

	if(result) {
		addTextNode('OKがクリックされました！');
	} else {
		addTextNode('キャンセルがクリックされました！');
	}
}, false);
