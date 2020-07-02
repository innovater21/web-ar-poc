<html>
  <head>
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  </head>
  <body>
    <!-- <a-scene>
      <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
      <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"></a-sphere>
      <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
      <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"></a-plane>
      <a-sky color="#ECECEC"></a-sky>
      <a-entity camera></a-entity>
    </a-scene> -->
     <a-scene embedded arjs>
        <a-entity camera></a-entity>
       <a-entity position="0.70 1.93147 -7.26847" text="value: Point towards a horizontal surface" scale="3.2 3.2 3.2"></a-entity>
       <a-entity position="0.01 -0.27 -7.6" rotation="22.498906699197164 0 0" scale="1.19829 1.19949 1.19829" gltf-model="/models/bowl.gltf"></a-entity>
  </body>
</html>