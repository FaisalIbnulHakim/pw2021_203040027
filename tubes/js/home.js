
new fullpage('#fullpage', {
  autoScrolling: true,
  navigation: true,
  anchors: ['section1', 'section2'],
  responsiveWidth: 600,
  responsiveHeight: 300
});

const text = document.getElementById('main');
const prog = 'Buy Gaming Gear';
let idx = 1;

setInterval(write, 250);
function write() {
  text.innerText = prog.slice(0, idx);
  idx++;
  if (idx > prog.length) {

    idx = 1;
  }

}