@extends('default.page.app')
@section('title')
    <title>F.A.Q.S best cusco day trips</title>
@endsection
@section('title_header')
    <h1 class="text-4xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
    <h3 class="md:text-5xl text-3xl font-medium tracking-widest text-gray-50">Travel Tips</h3>
    <h4 class="md:text-9xl text-5xl font-bold inset-x-0 top-0 -mt-14 text-white text-opacity-10 absolute">Travel Tips</h4>
@endsection
@section('content')

   <div class="grid md:grid-cols-5 grid-cols-1 lg:gap-10 gap-5 lg:mx-20 mx-10">
        <div class="md:col-span-4">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Travel Tips</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/f-a-q#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section id="consejos" class="mt-20 md:px-10 px-2">
                <div class="grid md:grid-cols-5 grid-cols-1 md:gap-5 gap-2 items-center shadow rounded my-8 border border-amber-200">
                    <div class="p-2 flex justify-center">
                        <img src="{{asset('images/iconos/airplane.png')}}">
                    </div>
                    <div class="col-span-4">
                        <p class="p-5 text-gray-500">Peru is a big country, so many travelers take internal flights if they have limited time. There are four
                            bigger companies operating flights (Aero Continente, LanPeru (co-owned by LanChile), Taca and
                            Tans). There are also a handful of small airlines flying to remote destinations in light aircraft.
                            There&#39;s an 18% tax on domestic flights and there&#39;s also a US$ 4.00 departure tax on domestic
                            flights.</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-5 grid-cols-1 md:gap-5 gap2 items-center shadow rounded border border-amber-200">
                    <div class="p-2 flex justify-center">
                        <img src="{{asset('images/iconos/bus.png')}}">
                    </div>
                    <div class="col-span-4">
                        <p class="p-5 text-gray-500">Public buses are the usual mode of transport over long distances. They are cheap, frequent and
                            relatively comfortable, at least on major routes. When traveling between towns, have your passport
                            with you, as it will need to be shown at police checkpoints. Armed robberies on night buses are not
                            unheard of in Peru, so travel on a day bus (or fly) if you have the option. Trucks often double as
                            buses in remote areas. Local buses are slow, cheap and crowded; when you want to get off just yell
                            out. Taxi fares need to be haggled over; there are no metered cabs. Agree on the fare in advance.</p>
                    </div>
                </div>
            </section>
            <section class="my-10 md:px-5">
                <div class="mb-10">
                    <div id="informacion" class="flex text-primary items-center gap-3 pb-5">
                        <i data-feather="arrow-right"></i><h3 class="md:text-2xl text-lg font-semibold">General information</h3>
                    </div>
                    <div class="shadow mx-5">
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-1" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-1">When to Go</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Peru&#39;s peak tourist season is from June to August, which is the dry season in the highlands, and this
                                    is the best time to go if you&#39;re interested in hiking. Travelers do visit the highlands year-round,
                                    though the wettest months, January to April, make trekking muddy. Many of the major fiestas occur
                                    in the wettest months and continue undiminished in spite of heavy rain. Basically, there is tourism
                                    in the highlands throughout the year.
                                <br>On the coast, Peruvians visit the beaches during the sunny months from late December through
                                March, although few beaches are particularly enticing. The rest of the year, the coast is clothed in
                                mist. In the eastern rainforests, it naturally rains a lot. The wettest months are December through
                                April, though travelers visit year-round since it rarely rains for more than a few hours and there&#39;s
                                still plenty of sunshine to enjoy.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-2" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-2">What to Bring</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                                <p class="p-5 text-gray-500">Because Peru is a country of such diversity, what you bring depends on your travel plans. Bring
                                    warm clothes for the mountains, light clothes for the jungle and a combination for the coastal
                                    deserts, which are warm by day and cool at night. Items that are difficult to obtain in the country
                                    include: personal medical supplies, a money belt, sunscreen, good books in your native language
                                    and any electrical equipment you use.
                                <br>Some other suggestions include: something small and typical from your home country (for your
                                guest family). Dictionary; Spanish grammar book in your own language (there are no Spanish
                                Grammar books or Dictionaries available in Cusco); email addresses; a guidebook, English novel
                                books (no good bookstores around). If you plan to do the Inca Trail or another camping trip we
                                suggest bringing a warm jumper/sweater; raincoat; walking shoes/hiking boots; sleeping bag (for
                                Inca Trail, although these can be rented as well); water purification tablets (can be bought in Cusco
                                as well); pocket knife; torch/flashlight and equipment because there is a shortage of trekking
                                supplies in the country. For the jungle excursions malaria tablets, mosquito net and a raincoat (all
                                can be bought in Cusco as well).</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-3" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-3">Money in Peru</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">The currency of Peru is the Nuevo Sol. There are 100 centavos to each sol. At the time of writing US$ 1.00 was equal to S/.3.95. There are a number of automatic teller machines that take credit cards and there are numerous "Casas de Cambio" where Travelers Checks may be cashed or US Cash may be changed. There are also ATM that excepts Euro cards, which are Banco Latino and Banco del Sur. It is useful to arrive with American dollars. When changing money, be careful that you are not distracted with anything to make you lose count of what you have been given.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-4" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-4">Expenses in Perú</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">The following list gives you some indication of what you may wish to plan for during your stay in Cusco. Taxis US$ 1.5; local transport US$ 0.20; a set meal/menu in restaurant US$ 5.00; a beer in a nightclub US$ 5.00; a coffee in a trendy caf/bar $3.00; a pizza in a nice restaurant US$ 15.00; international phone call $0.50 per minute; laundry service US$ 3.00 per kilo; long distance local transport US$ 13.00 for about 15 hours; email service US$ 0.50/hr.
                                <br>If you are planning a trip in Peru after the Spanish Course, you have to consider a US$ 15-20 for a tiny budget including low-budget accommodations, all your meals and travel expenses. However, there are a couple of expensive tours you might want to take (e.g. Machu Picchu, river rafting, etc.).</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-5" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-5">Climate in Perú</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">The rainy season in Cusco occurs from December through April Students may still walk the Inca Trail, however, it may be wet at times. During the dry season, temperatures are hot during the day and very cold at night. It is recommended that students bring a wet weather coat and a warm coat for the nights and inside buildings, as they don't have heating. During the dry season it gets hot during the day in the sun, but it is always chilly during the nights, inside the buildings and in the shade. In May, June and July temperature really drops and it gets pretty cold. However, it is (almost) always sunny during the day.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-6"type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-6">Communications</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Generally, it'll be no problem to contact home, either by phone, mail, fax or internet. Long distance phone calls are about US$ 3.00 per minute but there are cheaper possibilities with Net2Phone etc. There are lots of cyber cafes in Cusco, the price for an hour of internet is about US$ 1.00.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-7" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-7">Visas</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">No visa is necessary for most western countries (but please check with the Peruvian Embassy in your home country). The tourist visa you will get upon arrival at Lima Airport, will allow you 90 days in Peru. You are allowed a maximum of three 30-day extensions for up 180 days (6 months) in Peru. Each extension will cost you about US$ 25.00. You might want to consider just crossing the (Bolivian or Chilean) border, if you need more time in Peru. It'll take you about two days and you'll be guaranteed another 90 days.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-8" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-8">Traveling</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Generally, it is pretty safe and relatively easy to travel around by yourself in Peru. There are buses, planes, taxis etc. all over the country as well as hotels of all categories. There are all kinds of travelers and tourists around and it will be easy to meet other people and have a great trip full of adventure, culture and new friends.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-9" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-9">Laundry</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">There are several laundry services in town that charge about US$ 3.00 per kilo to wash and fold, your clothes normally in 24 hours.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-10"  type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-10">Taxis</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Are innumerable. They can be flagged down by shouting taxi or by waving. Upon arrival at Lima airport an official cap might charge you US$ 20.00 or even US$ 25.00. From any point of the city to the airport is less expensive, about US$ 8.00 (an unofficial taxi). Within the city (Lima), the rate will vary from US$ 3.00 till US$ 8.00. Out of Lima, fares are cheaper. In Cusco, for example, taxis charge S/. 2.00 during the day and S/. 3.00 after 22:00 pm within the city. A taxi ride from or to the airport is more expensive. We recommend only official taxis especially during the nights. The cost is the same and they can be recognized because they have a phone number on the roof. </p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-11"  type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-11">Toilets</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Peruvian toilets rarely have toilet paper, even in the restaurants. It is best to take your own miniroll around with you. Don’t put paper down the toilet as it will block it. Receptacles are provided, even in the houses, and these are regularly emptied.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-12" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-12">Shopping</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Items purchased in shops and restaurants have fixed prices and cannot be bargained for. However, items on the street or in the market are bargain able. Peruvians have learnt that the tourists have more money than themselves so will sometimes put up their prices when they see you coming. If you think you are being conned then start to walk away. If they don`t call you back with a lower price then you have probably reached as low as they will go.
                                <br>The best quality and value lies in handcrafted products. This particularly applies to gold, silver and copper works, as well as Peru's rich textile goods. These include alpaca garments and woven tapestries. Alpaca products are well worth buying, as long as you are prepared to hand-wash them with great care. Vendors will often tell you their goods are made from alpaca beb. This does not mean baby alpacas, but refers to the wool taken from the throat of the animal, where it is at its finest and softest. Most woolen jumpers sold as alpaca are actually usually a more hardwearing mix of llama wool and synthetic fibers. Many tourists also take home reproductions of pre-Columbian ceramics, with gourds being the favorite.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-13" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-13">Business Hours</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Most stores are open from 10:00am to 21:00 pm with a long lunch break between 13:00 pm and 16:00 pm. Banks are open only in the morning from 9 am to 13:00 and from 4:30 till 18:00 in the afternoon.</p>
                            </div>
                        </div>
                    </div>
                    <div id="salud" class="flex text-primary items-center gap-3 py-5">
                        <i data-feather="arrow-right"></i><h3 class="md:text-2xl text-lg font-semibold">Health and safety</h3>
                    </div>
                    <div class="shadow mx-5">
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-one" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-one">Health Care</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">It is recommended that prior to arrival, students undertake a thorough medical examination, purchase health insurance and consult your physician about the necessary injections. There is no malaria in the Cusco area!</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-two" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-two">Sunburn</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                                <p class="p-5">Don`t forget that the sun is much stronger at tropical latitudes. It is easy to get sunburnt even when it is overcast. Take extra precautions to avoid being sunburnt: wear a hat and use sunscreen. Try not too spend too much time in the direct sun, especially between 11:00 and 14:00. Be especially careful when going on boat trips as the wind and reflection of sun from the water will increase the risk of sunburn. Drinks lots of water.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-three" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-three">Stomach Upsets</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Symptoms are nausea, vomiting and diarrhea. The best precaution against this is to avoid uncooked vegetables, salads and tap water. Eat only fruit that requires peeling. If living with a host family all your food and drinks will have been properly prepared, so indulge. Despite precautions, many visitors are affected by an upset stomach. If you are affected get plenty of rest and drink lots of liquids. Oral Rehydration Solutions (ORS) are available from pharmacists and can help you to replace the fluids lost. If you are affected for more than three days and/or you have a fever, you should visit a doctor.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-four" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-four">Altitude Sickness</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Some people experience some discomfort at this altitude. We recommend at least a day of rest prior to the commencement of classes. The symptoms are headaches, dizziness, stomach upset and tiredness. These symptoms can be managed by reducing the alcohol intake; drinking lots of fluids; eating light meals and getting plenty of rest.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-five" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-five">Safety Issues</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Cusco is a relatively safe city but as the urban center have swollen, so has petty crime. Unfortunately, pickpockets and thieves have become more and more common in Lima and Cusco and one should take precautions such as not taking a taxi alone at night nor walking around on the street alone after 22:00. Objects such as money and passports should not be left openly in your room.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="restaurantes" class="md:mt-24 mt-16 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Cusco Restaurants</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
                </div>
            </section>
            <section class="md:my-16 my-8">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 px-5">
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Inka Grill</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal de Panes 115, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 262992</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$10</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">This is, according to many, the best food in town with a bit of excellent "Novo Andean" cuisine on offer. This means that they use native ingredients and revived Andean recipes alongside more modern and innovative cooking techniques to create excellent and interesting dining options. They also have a wide selection of vegetarian dishes, hearty homemade pasta, delicious coffee and sumptuous take-out pastries for a feast. Good service is on hand with attentive staff.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Tunupa</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal Confiturias 233, 2do piso, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 252963</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$10</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">This is another offering in the Plaza de Armas, with a great variety of foods. Options include a fabulous buffet dinner with meat, seafood, vegetables, and traditional Peruvian food. It usually caters to groups meaning there is usually a lively and jovial atmosphere. There is an evening show every day with colorful Andean musicians and dancers or alternatively there are seats and tables with an excellent view of the Plaza de Armas in Cuzco.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Inkanto</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal de Carnes 254, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 222642</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$11</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Pristine decor welcomes guests to Inkanto with white tablecloths and fine quality furniture. The food did not disappoint - this is primarily Italian cuisine with fantastic pizza, pasta and enough risotto to make your mouth water without even considering the freshly baked rolls with olive oil and balsamic vinegar that come as an appetizer. A great option for those looking for some good Italian food in the square.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Cicciolina</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Triunfo 393, Cuzco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 239510</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$11</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">This is another Mediterranean offering with Italian food again taking center stage, but is by no means the exclusive option. Tasty appetizers are seafood marinated in coconut milk with Asian spices. The main dishes include Italian pasta - a particularly good dish is the Lamb Ragu which has an exceptional sauce. Moroccan spices count too and even the odd Peruvian number - Causa de Cuy is a delicious dish of mashed potatoes with fresh lime and - you guessed it - Guinea Pig, an Andean delicacy that has been eaten for centuries.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Granja de Heidi</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Cuesta San Blas 525, 2do piso, San Blas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 238383</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$4 - $5</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">A fresh off the farm restaurant with the best quality local ingredients, Heidi's Granja is a great value restaurant in the San Blas district of Cuzco. Wonderfully healthy home cooking is the order of the day with a wide range of locally inspired dishes infused with the flair of the personable German chef and owner. Vegetarian options are also available, with the rocoto rellena (stuffed with red chilli pepper) a definite hit for those who can handle their spices. The desserts are simply exquisite - try the chocolate fudge that will leave you in awe of how you can actually make chocolate to taste so good.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Chez Maggy</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Procuradores 344, 365, 374, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 234861</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$5</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Maggy always has a great backpacker vibe and offers great value food with Peruvian, Mexican and Italian food all on the menu. Particular favorites are the pizza and ravioli dishes, a great take on the Italian original with its own distinct Andean influences and flavors. There are three places on Procuradores street, although the last one on the left has probably the most authentic and rustic character.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="h-screen sticky top-0 hidden md:block">
            <div class="h-screen flex">
                <div class="my-10">
                    <div class="mb-5">
                        <span class="text-primary font-semibold">Contents</span>
                        <ul class="text-sm mt-3 ml-2 text-gray-500">
                            <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#consejos">Travel tips</a></li>
                            <li>
                                <ul class="ml-4">
                                    <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#informacion">General information</a></li>
                                    <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#salud">Health and safety</a></li>
                                </ul>
                            </li>
                            <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#restaurantes">Cusco Restaurants</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <span class="text-primary font-semibold">Recommended tours</span>
                        @foreach ($paquetes as $paquete)
                            <a href="/en-tours/{{$paquete->url}}">
                                <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                                    <img src="{{asset($paquete->imagen)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                                    <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paquete->titulo}}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
   </div>

@endsection
