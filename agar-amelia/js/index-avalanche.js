//============================================================================================================================
//                                                            TEST.JS
// matter.js 
// responsive
//============================================================================================================================
// globals
const sectionTag = document.querySelector("section.shapes")
const w = 2300
const h = 400
var mqls = []; // make media query array

//==============================================================
//screenResonsive(width, height)  updates height and width  variable 
//==============================================================
function screenResonsive(width, height) {
    const h = 100;
    const w = window.innerWidth;
    // console.log('resonsive size w, h',width, height)
    return Math.round(width/100 * window.innerWidth),h;
}

// ============================================
// screenState()  add listener to all media queries screen size
// ============================================
function screenState(x) {
    console.log("responsive ")
    for (var i=0; i<mqls.length; i++){ // loop through queries
        mediaQResponse(mqls[i]) // call handler function explicitly at run time
        mqls[i].addListener( mediaQResponse) // call handler function whenever the media query is triggered
    }

 }

// ============================================
// mediaQResponse()  respond t0 media query matchs
// ============================================
function mediaQResponse(){
    if (mqls[0].matches){ // do something when width: 860px media query matches
        // document.body.style.backgroundColor = "#cc99ff"
    }
    if (mqls[1].matches){ // do something when width: 600px media query matches
        // document.body.style.backgroundColor = "#e6ccff"
    }
    if (mqls[2].matches){ // do something when height: 500px media query matches
        // document.body.style.backgroundColor = "y#f2e6ff"
    }
}  

// ============================================
// ResponsiveSetup() continously call screenResonssive() | populate media query array | add listener to window size
// ============================================
function ResponsiveSetup(){
    setInterval(()=>{
        screenResonsive(w, h)
    },1000)

    mqls = [ 
        window.matchMedia("(max-width: 860px)"),
        window.matchMedia("(max-width: 600px)"),
        window.matchMedia("(max-height: 200px)")
    ]

    var x = window.matchMedia("(max-width: 700px)")
    screenState(mqls) // Call listener function at run time
    x.addListener(screenState) // Attach listener function on state changes
}

// ============================================
// myRenderer class()
// constructor set variables render, engine
// object method
// mouse method
// ============================================
function myRenderer (){
       //      Matter.use(
       //          'matter-wrap'
       //      );

       //  const Runner = Matter.Runner, Common = Matter.Common;
       //  this.Composite = Matter.Composite,
       //  this.Render = Matter.Render;
       //  this.MouseConstraint = Matter.MouseConstraint;
       //  this.Mouse = Matter.Mouse;
       //  this.Engine = Matter.Engine;
       //  this.World = Matter.World;
       //  this.Composites = Matter.Composites;
       //  this.Bodies = Matter.Bodies;
       //  this.stack;
       //  this.engine = this.Engine.create();  // second engine
       //  this.world = this.engine.world; //second world???

       //  this.render = this.Render.create({ 
       //      element: sectionTag,
       //      engine: this.engine,
       //      options: {
       //      height: h,
       //      width: w,
       //      background: "rgba(255, 255, 255, 0)",
       //      wireframes: false,
       //      pixelRatio: window.devicePixelRatio
       //    }
       //  })
       //  this.Render.run(this.render);
       //  console.log('render size', this.render)
       //  // create runner
       //  var runner = Runner.create();
       //  Runner.run(runner, this.engine);

       //  engine.world.gravity.x = 0.1;
       //  engine.world.gravity.y = 0.5;

    
       //      let _bodies = this.Bodies;
       //      let _world = this.world;
       //      let World = this.World;
       //      let stack = this.stack


       //      // the falling objects are this stack
       //      stack = this.Composites.stack(250, 3, 3, 60, 0, 0, function(x, y) { // this is spacing function (x,y, colomn, row, ?,?)
       //          return _bodies.circle(x, y, 5, { 
       //              friction: .0001, 
       //              restitution: 1.01, 
       //              density: 0.0001,
       //              render: {
       //                  sprite: {
       //                  texture: "assets/@.png",
       //                  // fillStyle: 'white',
       //                  strokeStyle: 'black',
       //                  xScale: 1.,
       //                  yScale: 1.
       //                  }
       //              } 
       //              });
       //      });


       //  World.add(_world, stack); // add falling objects to world

       //  // add the three rectangles into world
       //  World.add(_world, [
        
       //      _bodies.rectangle(-1700, h+130, 1150, 50, {  // bottom site rectangle body
       //          isStatic: true, 
       //           render: {
       //               fillStyle: 'WHITE',
                     
       //           }
       //      })
       //  ]);

        // let render = this.render
        // for (var i = 0; i < stack.bodies.length; i += 1) {
        //     stack.bodies[i].plugin.wrap = {
        //         min: { x: render.bounds.min.x, y: render.bounds.min.y },
        //         max: { x: render.bounds.max.x, y: render.bounds.max.y }
        //     };
        // }
        
       //  this.Engine.run(this.engine) // run the engine
       //  this.Render.lookAt(this.render, this.Composite.allBodies(this.world)); // fit the render viewport to the scene
    
       // // add mouse control
       //  var mouse = this.Mouse.create(this.render.canvas),
       //      mouseConstraint = this.MouseConstraint.create(this.engine, {
       //          mouse: mouse,
       //          constraint: {
       //              stiffness: 0.2,
       //              render: {
       //                  visible: false
       //              }
       //          }
       //      });

       //  this.World.add(this.world, mouseConstraint);
       //  this.render.mouse = mouse; // keep the mouse in sync with rendering

        // this.Engine.clear(this.engine)




        var Engine = Matter.Engine,
        Render = Matter.Render,
        Runner = Matter.Runner,
        Composites = Matter.Composites,
        Common = Matter.Common,
        MouseConstraint = Matter.MouseConstraint,
        Mouse = Matter.Mouse,
        World = Matter.World,
        Bodies = Matter.Bodies;

    // create engine
    var engine = Engine.create(),
        world = engine.world;

    // create renderer
    var render = Render.create({
        element: document.body,
        engine: engine,

        options: {
            width: 1300,
            height: 100,
            showAngleIndicator: true,
            background: "rgba(255, 255, 255, 0)",
            wireframes: false,
        }
    });

    Render.run(render);

    // create runner
    var runner = Runner.create();
    Runner.run(runner, engine);

    // add bodies
    var stack = Composites.stack(20, 20, 10, 5, 0, 0, function(x, y) {
        // var sides = Math.round(Common.random(1, 8));

        // // triangles can be a little unstable, so avoid until fixed
        // sides = (sides === 3) ? 4 : sides;

        // // round the edges of some bodies
        // var chamfer = null;
        // if (sides > 2 && Common.random() > 0.7) {
        //     chamfer = {
        //         radius: 10
        //     };
        // }

        // switch (Math.round(Common.random(0, 1))) {
        // case 0:
        //     if (Common.random() < 0.8) {
        //         return Bodies.rectangle(x, y, Common.random(25, 50), Common.random(25, 50), { chamfer: chamfer });
        //     } else {
        //         return Bodies.rectangle(x, y, Common.random(80, 120), Common.random(25, 30), { chamfer: chamfer });
        //     }
        // case 1:
        //     return Bodies.polygon(x, y, sides, Common.random(25, 50), { chamfer: chamfer });
        // }
        
         return  Bodies.circle(x, y, 5, { 
                    friction: .0001, 
                    restitution: 1.01, 
                    density: 0.0001,
                    render: {
                        sprite: {
                        texture: "assets/@.png",
                        // fillStyle: 'white',
                        strokeStyle: 'black',
                        xScale: 1.,
                        yScale: 1.
                        }
                    }
                })
         return  Bodies.circle(x, y, 5, { 
                    friction: .0001, 
                    restitution: 1.01, 
                    density: 0.0001,
                    render: {
                        sprite: {
                        texture: "assets/ball.png",
                        // fillStyle: 'white',
                        strokeStyle: 'black',
                        xScale: 1.,
                        yScale: 1.
                        }
                    }
                })
    });

    World.add(world, stack);


    World.add(world, Bodies.rectangle(100, 600, 800, 50, { isStatic: true }));

    

    // add mouse control
    var mouse = Mouse.create(render.canvas),
        mouseConstraint = MouseConstraint.create(engine, {
            mouse: mouse,
            constraint: {
                stiffness: 0.2,
                render: {
                    visible: false
                }
            }
        });

    World.add(world, mouseConstraint);

    // keep the mouse in sync with rendering
    render.mouse = mouse;

    // fit the render viewport to the scene
    Render.lookAt(render, {
        min: { x: 0, y: 0 },
        max: { x: 800, y: 600 }
    });

    // context for MatterTools.Demo
    return {
        engine: engine,
        runner: runner,
        render: render,
        canvas: render.canvas,
        stop: function() {
            Matter.Render.stop(render);
            Matter.Runner.stop(runner);
        }
    };

}
    
// ============================================
// loader() delay hides div
// ============================================
function loader(){
    // document.getElementById("loader").removeClass('hide')
        
}

// ============================================
// main()  sets up first calls
// ============================================
function main(){
    // ResponsiveSetup()
    // myRenderer()
  
}

main()
