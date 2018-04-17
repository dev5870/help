var container, camera, scene, renderer, group, particle;
var mouseX = 0, mouseY = 0;
var w = window.innerWidth-100;
var h = window.innerHeight;

init();
animate();
//TweenLite.ticker.addEventListener("tick", render);
function init() {
  container = document.createElement( 'div' );
  document.body.appendChild( container );  
  camera = new THREE.PerspectiveCamera( 75, w / h, 1, 3000 );
  camera.position.z = 1000;
  scene = new THREE.Scene();
  var PI2 = Math.PI * 2;
  var program = function ( context ) {
    context.beginPath();
    context.arc( 0, 0, 1, 0, PI2, true );
    context.closePath();
    context.fill();
  }
  group = new THREE.Object3D();
  scene.add( group );
  var t = new THREE.TorusGeometry( 450, 250, 12, 12, PI2);
  for ( var i = 0; i < t.vertices.length; i++ ) {
    particle = new THREE.Particle(
        new THREE.ParticleCanvasMaterial( { color: 0x67B8DE, program: program } ) );
    particle.position.x = 0;
    particle.position.y = 0;
    particle.position.z = 0;
    particle.scale.x = particle.scale.y = 10; makeTween(particle.position,i,t.vertices[i].x,t.vertices[i].y,t.vertices[i].z,i+60);
    group.add( particle );
  }
  renderer = new THREE.CanvasRenderer();
  renderer.setSize( w, h );
  container.appendChild( renderer.domElement );
  document.addEventListener( 'mousemove', onDocumentMouseMove, false );
  document.addEventListener( 'touchstart', onDocumentTouchStart, false );
  document.addEventListener( 'touchmove', onDocumentTouchMove, false );
  //
  window.addEventListener( 'resize', onWindowResize, false );
}

function onWindowResize() {
  w = window.innerWidth;
  h = window.innerHeight;
  camera.aspect = w/h;
  camera.updateProjectionMatrix();
  renderer.setSize( w, h );

}
//
function onDocumentMouseMove( event ) {
  mouseX = event.clientX - w/2;
  mouseY = event.clientY - h/2;
}

function onDocumentTouchStart( event ) {
  if ( event.touches.length === 1 ) {
    event.preventDefault();
    mouseX = event.touches[ 0 ].pageX - w/2;
    mouseY = event.touches[ 0 ].pageY - h/2;
  }
}

function onDocumentTouchMove( event ) {
  if ( event.touches.length === 1 ) {
    event.preventDefault();
    mouseX = event.touches[ 0 ].pageX - w/2;
    mouseY = event.touches[ 0 ].pageY - h/2;
  }
}

//
function animate() {
  requestAnimationFrame( animate );
  render();
}

function render() {
  camera.position.x += ( mouseX - camera.position.x ) * 0.05;
  camera.position.y += ( - mouseY - camera.position.y ) * 0.05;
  camera.lookAt( scene.position );
  group.rotation.x += 0.01;
  group.rotation.y += 0.02;
  renderer.render( scene, camera );
}

// simple tween
function makeTween(o,d,tx,ty,tz,t){
  var cnt=0;
var f=function(){
    cnt++; if(cnt>d){
    if (cnt>=t+d){o.x = tx; o.y = ty; o.z = tz;
      clearInterval(o.tweenInterval);
      console.log("stopped"+cnt);
    } else {
      o.x =linearTween(cnt-d,0,tx,t);
      o.y =linearTween(cnt-d,0,ty,t);
      o.z =linearTween(cnt-d,0,tz,t);
    } } }
  clearInterval(o.tweenInterval);
  o.tweenInterval = setInterval(f,1000/60);
}
//http://www.robertpenner.com/easing/penner_easing_as1.txt
 function linearTween(t, b, c, d) {return c*t/d + b;};
