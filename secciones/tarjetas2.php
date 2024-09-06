<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/txt.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <style>
        .swal2-popup .swal2-html-container {
        text-align: justify;
        }
        .swal2-html-container ul {
        padding-left: 20px; 
        list-style-type: disc; 
        }
        .swal2-html-container p {
        text-indent: 20px; 
        }
        .custom-swal-popup {
            padding-top: 20px !important; 
            padding-bottom: 20px !important;
            margin: auto; 
            max-height: 80vh; 
            overflow-y: auto; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }
        p {
        text-align: justify;
        text-indent: 20px;
        }

        .box-icon-modern {
                background-color: #f9f9f9;
                border-radius: 8px;
                padding: 10px;
                margin: 1   0px;
                text-align: center;
                transition: transform 0.3s ease;
                height: 380px; 
            }
            .box-icon-modern:hover {
                transform: translateY(-5px);
            }
            .icon-modern img {
                width: 100%;
                height: 150px;
                object-fit: contain;
                box-shadow: none;
                margin-bottom: 15px;
            }
            .box-icon-modern-title {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .box-icon-modern-text {
                font-size: 1rem;
                color: #777;
            }
            .button {
                margin-top: 40px;
                padding: 10px 20px;
                font-size: 1rem;
                cursor: pointer;
            }
    </style>
    </head>
    <body>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h2>Actas Constitutivas</h2>
            <div class="divider-lg"></div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <p class="p big text-gray-800">En el marco de nuestra materia de Marco Legal en la carrera de Ingeniería en Sistemas, hemos abordado la creación y análisis de documentos legales fundamentales para la constitución y operación de entidades comerciales. En esta ocasión, presentaremos tres documentos clave: dos correspondientes a una firma personal y una compañía anónima ficticias, que hemos elaborado como parte de nuestro aprendizaje práctico.</p>
                    <p  class="p big text-gray-800">A través de estos documentos, hemos explorado cómo se formalizan y regulan diferentes tipos de entidades comerciales en Venezuela, comprendiendo las implicaciones legales y operativas de cada tipo de estructura. Pero, ¿Cómo saber si debo elegir una u otra?</p>
                    <p  class="p big text-gray-800">La Firma Personal es una estructura empresarial simple en la que el propietario tiene responsabilidad ilimitada, lo que significa que responde personalmente por las deudas del negocio. Esta forma es adecuada para pequeños negocios con un alcance local que buscan flexibilidad y control total. En contraste, una Compañía Anónima proporciona responsabilidad limitada a sus accionistas, protegiendo su patrimonio personal y facilitando la captación de capital y la expansión. Es ideal para empresas con planes de crecimiento significativo y múltiples socios, ya que permite una gestión profesional y una mayor protección legal. La elección entre una u otra depende del tamaño del negocio, el riesgo involucrado y los objetivos de expansión.</p>
                    <p class="p big text-gray-800">Puedes usar este botón y acceder a todo este contenido</p>
                    <a class="button button-default-outline" href="https://www.youtube.com/@MarcoLegal-e9e" target="_blank">Ver Canal de Youtube</a>
                    <p  class="p big text-gray-800">Aquí puedes ver los diferentes documentos de Actas Constitutivas que hemos creado:</p>
                    
                </div>
            </div>
            <div class="row icon-modern-list no-gutters">
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-modern modern-variant-2">
                        <div class="icon-modern">
                            <img src="../assets/img/logo_viveres.jpeg" alt="Logo Viveres">
                        </div>
                        <h5 class="box-icon-modern-title">Acta Constitutiva "Víveres Ortiz"</h5>
                        <p style="text-align: center;">Firma Personal</p>
                        <button class="button button-default-outline" onclick="showDescription('<p>Esta Firma Personal se especializa en la venta y distribución de una amplia gama de productos de primera necesidad, incluyendo víveres, charcutería, enlatados, pan, y otros artículos esenciales para el hogar. Con un enfoque en la calidad y la variedad, la tienda busca satisfacer las necesidades diarias de sus clientes, ofreciendo productos frescos y cuidadosamente seleccionados para garantizar la mejor experiencia de compra.</p> <p> La tienda se destaca no solo por la calidad de sus productos, sino también por su atención personalizada. Cada cliente es atendido con esmero y dedicación, asegurando que reciban el mejor servicio posible y garantizar una experiencia de compra única</p> <p>Creado por:</p> <ul> <li>Jesús Pérez</li> <li>Miguel Ortiz</li> <li>Jesús Lopez</li> <li>Luis Urdaneta</li></ul> ')">Leer más</button>                       
                        <button type="button" class="abrir-pdf button button-default-outline" data-file="../documents/Firma Personal Viveres Ortiz.pdf">Abrir Documento</button>
                      
                    </article>
                    <br><br><br>
                    <div class="col-md-4 col-lg-4">
                  <div class="box-video" data-lightgallery="group">
                  <iframe src="https://www.youtube.com/embed/mXcympf98hc?si=kCq6N0_L8zbSjEWC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </a>
                  </div>
                </div>
               

                </div>

                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-modern modern-variant-2">
                        <div class="icon-modern">
                            <img src="../assets/img/logo_taurus.jpeg" style="border-radius: 80px;" alt="Logo Taurus">
                        </div>
                        <h5 class="box-icon-modern-title">Acta Constitutiva "TaurusForce"</h5>
                        <p style="text-align: center;">Compañia Anónima C.A</p>
                        <button class="button button-default-outline" onclick="showDescription('<p>TaurusForce es una Compañía Anónima dedicada a la gestión y administración de gimnasios y centros de entrenamiento físico de alta calidad. Su misión es promover el bienestar físico y el cuidado integral de la salud a través de una oferta amplia y diversa de servicios.</p> <p>El gimnasio ofrece entrenamientos personalizados y clases grupales en disciplinas especializadas como yoga, pilates, crossfit, y spinning. Más allá del acondicionamiento físico, incorporamos un enfoque holístico hacia el bienestar, ofreciendo un spa completo con servicios como masajes deportivos y relajantes, tratamientos de belleza, sauna y fisioterapia.</p>  <p>Creado por:</p> <ul> <li>Karen Rosales</li> <li>Luis Cardenas</li> <li>Eduards Zambrano</li> </ul>.')">Leer más</button>
                        <button type="button" class="abrir-pdf button button-default-outline" data-file="../documents/Compañía Anónima TaurusForce.pdf">Abrir Documento</button>

               
                    </article>
                    <br><br><br>
                    <div class="col-md-4 col-lg-4">
                  <div class="box-video" data-lightgallery="group">
                  <iframe src="https://www.youtube.com/embed/yvUvozQlgeQ?si=snPOQOQmKYaG83r1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
                   
                 
              

                </div>

                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-modern modern-variant-2">
                        <div class="icon-modern">
                            <img src="../assets/img/logo_tech.png" alt="Logo Aron">
                        </div>
                        <h5 class="box-icon-modern-title">Acta Constitutiva "VargasTech"</h5>
                        <p style="text-align: center;">Firma Personal</p>
                        <button class="button button-default-outline" onclick="showDescription('<p>Esta Firma Personal se especializa en la compra, venta y distribución de hardware y accesorios informáticos, ofreciendo una amplia gama de productos tecnológicos de alta calidad. Desde la comercialización de computadoras hasta los componentes electrónicos más avanzados, nuestra misión es equipar a nuestros clientes con las mejores herramientas para el éxito.</p> <p>Nos dedicamos a proveer periféricos de última generación y ofrecemos servicios de reparación eficientes y confiables, asegurando que tus dispositivos funcionen al máximo de su capacidad. Además, brindamos asesoramiento personalizado en la compra de equipos, ayudándote a tomar decisiones informadas y adaptadas a tus necesidades específicas.</p> <p>Creado por:</p> <ul> <li>Yerson Camargo</li> <li>Aron Rojas</li> <li>David Guillén</li> <li>Yelimar Pérez</li> <li>Jesús Burgos</li> <li>Luis Zambrano</li> <li>Leonardo Carrero</li> <li>Ismael Sanchez</li></ul>')">Leer más</button>
                        <button type="button" class="abrir-pdf button button-default-outline" data-file="../documents/Firma Personal Vargas Tech.pdf">Ver Documento</button>
                    </article>
                    <br><br><br>
                    <div class="col-md-4 col-lg-4">
                  <div class="box-video" data-lightgallery="group">
                  <iframe  src="https://www.youtube.com/embed/6JXiDHIdrDY?si=5vL-gAYAfd-wWHc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </a>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll(".abrir-pdf").forEach(function(button) {
            button.addEventListener("click", function() {
                event.preventDefault();
                const file = this.getAttribute("data-file");
                window.open(file, '_blank');
            });
        });

        function showDescription(description) {
            Swal.fire({
                title: 'Descripción del Documento',
                html: description,
                icon: 'info',
                confirmButtonText: 'Cerrar',
                customClass: {
                    popup: 'custom-swal-popup'
                },
                didOpen: () => {
                    const popup = document.querySelector('.custom-swal-popup');
                    if (popup) {
                        popup.style.marginTop = '10vh';
                    }
                }
            });
        }

    </script>
    </body>
    </html>
