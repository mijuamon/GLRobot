/*Seminario GPC. Grafo de escena.
  Dibujo de un paraguas con animacion*/
var renderer, scene, camera, cameraControls;


//Variables temporales
var angulo=0;
var antes = Date.now();

init();
loadScene();
render();

function init()
{
	//Configurar el canvas y el motor de render
	renderer = new THREE.WebGLRenderer();
	renderer.setSize(window.innerWidth,window.innerHeight);
	renderer.setClearColor(new THREE.Color(0x0000AA),1.0);
	document.getElementById('container').appendChild(renderer.domElement);
	
	//Instancia de la escena
	scene = new THREE.Scene();
	scene.add(new THREE.GridHelper(10,1));
	var aspectRatio = window.innerWidth/window.innerHeight;
	
	
	//Instanciar y configurar la camara	
	camera = new THREE.PerspectiveCamera(45, aspectRatio, 0.1,100);
	camera.position.set(0,0,40);
	camera.lookAt(new THREE.Vector3(0,0,0));
	
	
	//Instanciar los controles de la camara
	//Boton izdo: Arrastre vertical -giro en x fijo; arrastre horizonal - giro en y local
	//Boton derecho: panning
	//Rueda Zoom
	cameraControls = new THREE.OrbitControls(camera, renderer.domElement);
	//Centro de orbitacion
	cameraControls.target.set(0,0,0);
	
	//Cambio el vector dvertical up -inclinacion de la camara-
	camera.rotateZ(30*Math.PI/100);
	
	//Registrar la callback de resize
	window.addEventListener('resize',updateAspectRatio);
}

//Construye el grafo de escena con geometria y material
function loadScene()
{
	//Cubo y esfera
	var material = new THREE.MeshBasicMaterial({color:0xFF0000, wireframe:true});
	
	var geometriaCubo = new THREE.CubeGeometry(2,2,2);
	var geometriaEsfera = new THREE.SphereGeometry(1);
	
	var cubo = new THREE.Mesh(geometriaCubo,material);
	var esfera = new THREE.Mesh(geometriaEsfera,material);
	
	cubo.position.x=-1; //cubo.position.set(-1,0,0);
	esfera.position.x=1;
	
	var esferaCubo = new THREE.Object3D();
	
	
	
	esferaCubo.add(cubo);
	esferaCubo.add(esfera);
	scene.add(esferaCubo);
	
	var axisHelper = new THREE.AxisHelper(100);
	scene.add(axisHelper); 
}
function updateAspectRatio()
{
	//Renovar las dimensiones del renderer
	renderer.setSize(window.innerWidth, window.innerHeight);
	//Renovar la relacion de aspecto de frutum
	camera.aspect = window.innerWidth / window.innerHeight;
	
	camera.updateProjectionMatrix();
}

//Cambio de valor de variables de un frame a otro
function update()
{
	cameraControls.update();
	
}
function render()
{
	//Encolar nuevo render
	requestAnimationFrame(render);
	update();
	renderer.render(scene,camera);
}