@extends('index/layout')

@section('content')

<!-- Home Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong>Терминология</strong></h1><br><br><br>
            <h2 class="color">Определения терминов, <br><br>характеризующих свойства материалов</h2>
        </div>
    </div>
</div>

<!-- Portfolio Section
==========================================-->
<div id="tf-works">
    <div class="container"> <!-- Container -->
        <div class="categories">

             <ul class="cat">
                 <li class="pull-left"><h2>Фильтр по алфавиту</h2><br><br></li>
                 <li class="pull-right">
                     <ol class="type">
                         <li><a href="#" data-filter="*" class="active">Все</a></li>
                         <li><a href="#" data-filter=".A">А</a></li>
                         <li><a href="#" data-filter=".B">Б</a></li>
                         <li><a href="#" data-filter=".V" >В</a></li>
                         <li><a href="#" data-filter=".G" >Г</a></li>
                         <li><a href="#" data-filter=".D" >Д</a></li>
                         <li><a href="#" data-filter=".E" >Е</a></li>
                         <li><a href="#" data-filter=".GG" >Ж</a></li>
                         <li><a href="#" data-filter=".Z" >З</a></li>
                         <li><a href="#" data-filter=".I" >И</a></li>
                         <li><a href="#" data-filter=".K" >К</a></li>
                         <li><a href="#" data-filter=".L" >Л</a></li>
                         <li><a href="#" data-filter=".M" >М</a></li>
                         <li><a href="#" data-filter=".N" >Н</a></li>
                         <li><a href="#" data-filter=".O" >О</a></li>
                         <li><a href="#" data-filter=".P" >П</a></li>
                         <li><a href="#" data-filter=".R" >Р</a></li>
                         <li><a href="#" data-filter=".S" >С</a></li>
                         <li><a href="#" data-filter=".T" >Т</a></li>
                         <li><a href="#" data-filter=".U" >У</a></li>
                         <li><a href="#" data-filter=".F" >Ф</a></li>
                         <li><a href="#" data-filter=".H" >Х</a></li>
                         <li><a href="#" data-filter=".CC" >Ц</a></li>
                         <li><a href="#" data-filter=".CH" >Ч</a></li>
                         <li><a href="#" data-filter=".SH" >Ш</a></li>
                         <li><a href="#" data-filter=".EE" >Э</a></li>
                     </ol>
                 </li>
             </ul>
             <div class="clearfix"></div>
         </div>

         <div id="lightbox" class="row">

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Azot">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Азотирование</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Amorph">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Аморфное состояние вещества</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Anod">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Анодирование</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Atak">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Атактическая структура</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Aust">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Аустенизация</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 A">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Aust1">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Аустенит</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 B">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Beinit">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Бейнит</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 V">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Vyaz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Вязкость разрушения</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 G">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Gomo">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Гомополимер</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 G">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_SN">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>График S/N</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 G">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Graph">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>График напряжение-деформация</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_GefU">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Деформационное упрочнение, наклеп</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Def">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Деформация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_DefZ">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Деформация при закалке </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_DiO">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Диэлектрическая проницаемость относительная &epsilon;<sub>r</sub></h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_DiA">
                        <a href="javascript:void 0;">
                            <div>
                                <h4>Диэлектрическая проницаемость абсолютная  &epsilon;<sub>r</sub></h4>
                                <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Dolg">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Долговечность, циклическая долговечность</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 D">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Dur">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Дюрометр Шора</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 E">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Emk">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Емкость демпфирования</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 GG">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Gest">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Жесткость, модуль сдвига</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 Z">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Zak">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Закалка </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 Z">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_ZakO">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Закалка с последующим отпуском  </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Izg">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Изгиб, угол изгиба</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Izn">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Износостойкость </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_IzoS">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Изотактическая структура </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_IzoZ">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Изотермическая закалка с выдержкой в бейнитовой области, аустемперинг </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Jomeni">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Испытание Джомени</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Izoda">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Испытание Изода </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Rokwel">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Испытание Роквелла </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 I">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Sharpi">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Испытание Шарпи</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 K">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Korroz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Коррозионная стойкость</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 K">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Koeff">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Коэффициент пропускания, нормальный</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 K">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Kristal">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Кристаллическая структура</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 L">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Lin">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Линовка профиля</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 M">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Mart">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Мартенсит </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 M">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_MPolz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Модуль ползучести </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 M">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_MUpr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Модуль упругости, модуль Юнга</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 M">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_MSech">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Модуль сечения </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 M">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Monom">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Мономер </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 N">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Napoln">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Наполнители</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 N">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Napr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Напряжение (механическое)</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 N">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Naug">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Науглероживание </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 N">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Norm">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Нормализация</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Obrab">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Обрабатываемость на станках</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Orient">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Ориентация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Ost">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Остаточные напряжения </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Otj">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Отжиг </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_OMag">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Относительная магнитная проницаемость</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_OUd">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Относительное удлинение тела</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 O">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_OUm">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Относительное уменьшение площади поперечного сечения тела</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Perlit">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Перлит </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PlasDef">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Пластическая деформация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PlasMat">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Пластические материалы</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PlasRaz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Пластический разрыв </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Plot">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Плотность </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Poverh">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Поверхностное упрочнение </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Povysh">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Повышение твердости выделением вторичных фаз</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Pogl">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Поглощение воды </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Pok">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Показатель преломления </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Polz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Ползучесть </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Poln">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Полностью твердый</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Polutv">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Полутвердый </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PravH">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Правило Хоукса</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrDolg">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел долговечности</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrPolz">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел ползучести</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrProp">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел пропорциональности</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrProch">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел прочности на растяжение, временное сопротивление</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrProch1">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел прочности на сжатие </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrUpr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел упругости </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_PrUst">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Предел усталости (выносливости)</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Prob">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Пробное напряжение </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Prok">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Прокаливаемость </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Pron">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Проницаемость </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 P">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Proch">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Прочность </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Ravn">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Равновесная диаграмма </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Razr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Разрывное напряжение при растяжении </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Rassh">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Расширение, температурный коэффициент линейного расширения</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_RasshLin">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Расширение линейное</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Rez">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Результаты испытания Виккерса</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 R">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Rec">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Рекристаллизация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Siod">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Синдиотактическая структура</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Snyat">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Снятие напряжения</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Sootn">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Соотношение Пуассона</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Sopol">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Сополимер </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Sopr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Сопротивление срезу </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Spek">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Спекание </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Splav">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Сплав </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Spos">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Способность к сварке</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Srez">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Срез </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Star">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Старение </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_StarM">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Старение мартенсита </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Step">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Степень твердости</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 S">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Sfer">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Сфероидизация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Tverd">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Твердость</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_TempP">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Температура перехода</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_TempPS">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Температура перехода в стеклообразное состояние</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Tepl">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Тепловое коробление/прогибание температурой</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Teplop">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Теплопроводность </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                  <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Teplos">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Теплостойкий сплав </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Term">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Термическая обработка на твердый раствор</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_TochP">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Точка плавления</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_TochR">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Точка размягчения</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Trans">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Транс-структура</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 T">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Tren">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Трение, коэффициент трения</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_UdT">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Удельная теплоемкость </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_UdE">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Удельная электропроводность</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_ES">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Удельное электрическое сопротивление</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Udel">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Удельный вес</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_UprV">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Упругое восстановление формы после деформации, частичное</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_UprD">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Упругая деформация</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 U">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Ust">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Усталостная прочность</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 F">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Fer">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Феррит </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 H">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_HrupM">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Хрупкий материал</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 H">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_HrupR">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Хрупкое разрушение</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 CC">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Cemen">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Цементация </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 CC">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Cementit">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Цементит</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 CC">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Cis">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Цис-структура</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 CH">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Chisl">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Число твердости по Бринеллю (НВ)</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 SH">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Shkal">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Шкала по Моосу</h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 EE">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Elast">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Эластичность </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12 col-md-12 col-lg-12 EE">
                 <div class="portfolio-item">
                     <div class="" data-toggle="modal" data-target="#Modal_Electr">
                         <a href="javascript:void 0;">
                             <div>
                                 <h4>Электрическая прочность диэлектрика </h4>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>


         </div>
     </div>
 </div>


<!-- Modal -->
<div class="modal fade" id="Modal_Azot" tabindex="-1" role="dialog" aria-labelledby="Modal_Azot_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Azot_Label">Азотирование</h5>
            </div>
            <div class="modal-body">
                Химико-термическая обработка стали, которая заключается в диффузионном насыщении поверхностного слоя стали
                атомарным азотом при нагреве стали до 500-650&#176;С в атмосфере аммиака с распадом его на атомарный азот
                и водород. <p> В результате азотирования среднеуглеродистых легированных сталей образуются нитриды легирующих
                элементов и стали приобретают особо высокую твердость, износостойкость и увеличивается предел их
                выносливости не менее чем на 30%. Азотирование углеродистых сталей приводит к повышению коррозионной
                стойкости. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Amorph" tabindex="-1" role="dialog" aria-labelledby="Modal_Amorph_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Amorph_Label">Аморфное состояние вещества</h5>
            </div>
            <div class="modal-body">
                Одно из состояний твердого вещества (другое - кристаллическое), в котором центральные атомы твердого
                вещества и ближайшие к ними будут располагаться в определенном порядке, но по мере удаления от них этот
                порядок нарушается и расположение атомов становится случайным, т.е. присутствует ближний порядок
                расположения атомов и отсутствует дальний. Кроме того, вещество в аморфном состоянии не имеет
                определенной точки плавления/отвердевания при нагревании/остывании. Примерами служат стекло, канифоль.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Anod" tabindex="-1" role="dialog" aria-labelledby="Modal_Anod_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Anod_Label">Анодирование</h5>
            </div>
            <div class="modal-body">
                Электрохимический процесс образования оксидных пленок или покрытий в соответствующем растворе, при котором
                металл служит анодом. Поверхностная оксидная пленка покрывает металл и составляет с ним одно целое.
                <p> Анодирование повышает такие свойства металлов, как коррозионную стойкость, сопротивление истиранию,
                твердость, изменяет отражательные и излучательные характеристики. Улучшается внешний вид подвергшегося
                анодированию металла.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Atak" tabindex="-1" role="dialog" aria-labelledby="Modal_Atak_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Atak_Label">Атактическая структура</h5>
            </div>
            <div class="modal-body">
                Это полимерная структура (полимер), у которой расположение боковых групп молекулярной цепочки, таких как
                CH<sub>3</sub>, относительно плоскости основной цепи нерегулярно, хаотично. Атактический полимер не
                способен кристаллизироваться, является аморфным.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Aust" tabindex="-1" role="dialog" aria-labelledby="Modal_Aust_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Aust_Label">Аустенизация</h5>
            </div>
            <div class="modal-body">
                Процесс, происходящий тогда, когда железный сплав нагрет до температуры, при которой его структура
                превращается в аустенит.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Aust1" tabindex="-1" role="dialog" aria-labelledby="Modal_Aust1_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Aust1_Label">Аустенит </h5>
            </div>
            <div class="modal-body">
                Принято обозначать А или &gamma;. Твердый раствор внедрения углерода в Fe<sub>&gamma;</sub>, имеющий
                гранецентрированную кубическую (ГЦК) решетку с высокой растворимостью углерода в Fe<sub>&gamma;</sub>,
                достигающей 2.14% из-за достаточных размеров межатомных пор размещения углерода в решетке,
                составляющих сферы радиусами от 0.41 атомного радиуса железа.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Beinit" tabindex="-1" role="dialog" aria-labelledby="Modal_Beinit_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Beinit_Label">Бейнит</h5>
            </div>
            <div class="modal-body">
                Структура стали, образующаяся в результате промежуточного превращения аустенита. Состоит из
                высокодисперсной смеси частиц перенасыщенного углеродом феррита и карбида железа. В стали с бейнитной
                структурой имеется остаточный аустенит. Эта структура тверже, чем полученная при отжиге, но мягче, чем
                мартенсит.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Vyaz" tabindex="-1" role="dialog" aria-labelledby="Modal_Vyaz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Vyaz_Label">Вязкость разрушения</h5>
            </div>
            <div class="modal-body">
                Критерий трещиностойкости для наиболее жесткого нагружения - плоской деформации нагружением - при
                достижении критического значения перехода стабильной трещины в нестабильную и обозначаемый K<sub>1c</sub>.
                Он показывает значение напряжения вблизи вершины трещины, имеющей тупой раскрывающийся вид в момент
                разрушения, и связывает приложенное среднее напряжение с критической длиной трещины. Единица измерения
                K<sub>1c</sub> - МПа*м<sup>1/2</sup>. Критерий K<sub>1c</sub> позволяет определить безопасный размер
                трещины при известном рабочем напряжении и характеризует сопротивление развитию вязкой трещины.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Gomo" tabindex="-1" role="dialog" aria-labelledby="Modal_Gomo_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Gomo_Label">Гомополимер </h5>
            </div>
            <div class="modal-body">
                Полимер, макромолекулы которого построены из одинаковых по химическому строению многочисленных
                элементарных звеньев молекул (мономеров).
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_SN" tabindex="-1" role="dialog" aria-labelledby="Modal_SN_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_SN_Label">График S/N</h5>
            </div>
            <div class="modal-body">
                График амплитуды напряжения S, деленной на число циклов N испытаний на усталость. Амплитуда напряжения -
                это половина алгебраической разности между максимальным и минимальным напряжениями, при которых испытывался
                материал.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Graph" tabindex="-1" role="dialog" aria-labelledby="Modal_Graph_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Graph_Label">График напряжение-деформация</h5>
            </div>
            <div class="modal-body">
                График напряжение-деформация обычного растяжения, применяемый в технике напряжений и технике деформаций.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_GefU" tabindex="-1" role="dialog" aria-labelledby="Modal_GefU_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_GefU_Label">Деформационное упрочнение, наклеп</h5>
            </div>
            <div class="modal-body">
                При холодном пластическом деформировании изменяются физические свойства наклепанного металла и тем сильнее,
                чем больше степень деформации. В результате деформационного упрочнения увеличивается твердость, повышается
                электросопротивление, но понижаются пластичность, ударная вязкость и коррозионностойкость.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Def" tabindex="-1" role="dialog" aria-labelledby="Modal_Def_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Def_Label">Деформация </h5>
            </div>
            <div class="modal-body">
                В технике деформацию определяют как отношение: (изменение длины материала)/(начальная длина), когда
                материал подвергается растяжению или сжатию. Деформация сдвига - это отношение: (смещение, при котором один слой
                материала скользит по другому)/(смещение, при котором слои разделены). Деформация не имеет размерности, однако ее
                часто выражают в процентах. Деформацию сдвига обычно указывают как угловую меру в радианах.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_DefZ" tabindex="-1" role="dialog" aria-labelledby="Modal_DefZ_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_DefZ_Label">Деформация при закалке </h5>
            </div>
            <div class="modal-body">
                Повышение твердости материала вследствие обработки, подвергающей материал пластической деформации при
                температурах ниже его температуры рекристаллизации.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_DiO" tabindex="-1" role="dialog" aria-labelledby="Modal_DiO_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_DiO_Label">Диэлектрическая проницаемость относительная &epsilon;<sub>r</sub> </h5>
            </div>
            <div class="modal-body">
                 Относительная диэлектрическая проницаемость &epsilon;<sub>r</sub>, или диэлектрическая постоянная материала
                может быть определена как отношение емкости конденсатора с материалом между его пластинками C к емкости того
                же конденсатора C<sub>0</sub>, когда между пластинами вместо диэлектрика находится вакуум:
                <div style="color:blue;"> C </div>
                <div style="color:black;">_________ = <span style="color:blue;">&epsilon;<sub>r</sub>.</span></div>
                <div style="color:blue;"> C<sub>0</sub></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_DiA" tabindex="-1" role="dialog" aria-labelledby="Modal_DiA_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_DiA_Label">Диэлектрическая проницаемость абсолютная &epsilon;<sub>r</sub> </h5>
            </div>
            <div class="modal-body">
                Величина, характеризующая во сколько раз взаимодействие двух зарядов в среде меньше, чем в вакууме.
                Определяется как произведение относительной диэлектрической проницаемости &epsilon;<sub>r</sub> на
                диэлектрическую постоянную (вакуума) <p> &epsilon;<sub>0</sub> :
                &epsilon; = &epsilon;<sub>r</sub> * &epsilon;<sub>0</sub>. </p>
                Величина &epsilon;<sub>0</sub> = 8.853 * 10<sup>-12</sup> Ф/м. Единица измерения - Ф/м (фарад на метр).
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Dolg" tabindex="-1" role="dialog" aria-labelledby="Modal_Dolg_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Dolg_Label">Долговечность, циклическая долговечность </h5>
            </div>
            <div class="modal-body">
                Число циклов напряжения до появления разрушения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Dur" tabindex="-1" role="dialog" aria-labelledby="Modal_Dur_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Dur_Label">Дюрометр Шора</h5>
            </div>
            <div class="modal-body">
                Прибор для определения твердости полимероа и резины. Применяется числовая шкала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Emk" tabindex="-1" role="dialog" aria-labelledby="Modal_Emk_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Emk_Label">Емкость демпфирования</h5>
            </div>
            <div class="modal-body">
                Параметр, являющийся индикатором способности материала к подавлению вибраций.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Gest" tabindex="-1" role="dialog" aria-labelledby="Modal_Gest_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Gest_Label">Жесткость, модуль сдвига</h5>
            </div>
            <div class="modal-body">
                Жесткость - характеристика материала для определения способности сопротивляться любому виду деформации
                (сдвигу, растяжению, изгибу и т.д.). В условиях малых и умеренных напряжений (1 условие) большинство
                твердых материалов следует закону Гука при сдвиге. Если построить график зависимости напряжения сдвига от
                деформации сдвига, то на начальном участке получим прямую (следствие 1 условия). Модуль сдвига - отношение:
                напряжение сдвига/деформация сдвига или тангенс угла наклона этой прямой. Угол наклона этой прямой
                характеризует сдвиговую жесткость материала. А так как из тригонометрии (при малых углах - 2 условие)
                tg угла равен самому углу (следствие 2 условия), то приходим (в этих двух условиях) к идентичности понятий
                "жесткость" и "модуль сдвига".
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Zak" tabindex="-1" role="dialog" aria-labelledby="Modal_Zak_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Zak_Label">Закалка</h5>
            </div>
            <div class="modal-body">
                Термическая обработка материалов с быстрым охлаждением.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_ZakO" tabindex="-1" role="dialog" aria-labelledby="Modal_ZakO_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_ZakO_Label">Закалка с последующим отпуском</h5>
            </div>
            <div class="modal-body">
                Нагрев предварительно закаленного материала для увеличения его пластичности или твердости.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Izg" tabindex="-1" role="dialog" aria-labelledby="Modal_Izg_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Izg_Label">Изгиб, угол изгиба</h5>
            </div>
            <div class="modal-body">
                Результат, указанный в угловой мере, статических испытаний на изгиб до соприкосновения сторон, которые
                проводятся на материалах в форме листов, стержней и проволок, а также на трубах с загибом до 90&deg;.
                Углом изгиба называют угол, в пределах которого материал может быть изогнут без обнаружения нарушения
                целостности
                <p> <img src="/front_user/img/изгиб.png" height="108" width="452"/></p>
                <p><em>Изгиб образца</em></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Izn" tabindex="-1" role="dialog" aria-labelledby="Modal_Izn_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Izn_Label">Износостойкость</h5>
            </div>
            <div class="modal-body">
                Свойство материала оказывать сопротивление изнашиванию (разрушение поверхности ввиду отделения его частиц)
                в определенных условиях трения. Износостойкость оценивается величиной, обратной скорости изнашивания
                или интенсивности изнашивания, и определяется при испытаниях на трение и изнашивание в лабораторных или
                натурных условиях по определенным методикам.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_IzoS" tabindex="-1" role="dialog" aria-labelledby="Modal_IzoS_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_IzoS_Label">Изотактическая структура</h5>
            </div>
            <div class="modal-body">
                Полимарная структура, в которой боковые группы молекул расположены упорядоченно все на одной боковой
                стороне молекулярной цепочки.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_IzoZ" tabindex="-1" role="dialog" aria-labelledby="Modal_IzoZ_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_IzoZ_Label">Изотермическая закалка с выдержкой в бейнитовой
                    области, аустемперинг </h5>
            </div>
            <div class="modal-body">
                Тепловая обработка, применяемая к железным сплавам, для повышения из вязкости и прочности. Материал нагревают
                до аустенизирующей температуры и закаляют до температуры M<sub>3</sub> с такой скоростью, что не
                формируются ни феррит, ни перлит. Затем выдерживают при температуре M<sub>3</sub>, пока не закончится
                превращение его в бейнит.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Jomeni" tabindex="-1" role="dialog" aria-labelledby="Modal_Jomeni_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Jomeni_Label"> Испытание Джомени</h5>
            </div>
            <div class="modal-body">
                Испытание применяется для получения информации о прокаливаемости сплавов.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Izoda" tabindex="-1" role="dialog" aria-labelledby="Modal_Izoda_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Izoda_Label"> Испытание Изода</h5>
            </div>
            <div class="modal-body">
                Испытание применяют для определения чувствительности материала к нагрузке, прикладываемой с высокой
                скоростью. Оно состоит в нанесении резкого удара по образцу. Результаты испытания выражаются количеством
                энергии, поглощенной образцом при разрушении. Чем выше измеренная величина Изода, тем больше вязкость
                материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Rokwel" tabindex="-1" role="dialog" aria-labelledby="Modal_Rokwel_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Rokwel_Label"> Испытание Роквелла </h5>
             </div>
            <div class="modal-body">
                Метод Роквелла применяется для оценки твердости материала. Имеются числовые шкалы Роквелла, по которым
                можно определять непосредственно результаты испытаний.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Sharpi" tabindex="-1" role="dialog" aria-labelledby="Modal_Sharpi_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Sharpi_Label"> Испытание Шарпи </h5>
            </div>
            <div class="modal-body">
                Испытание для определения чувствительности материала к нагрузке, прикладываемой с высокой скоростью.
                Оно состоит в нанесении резкого удара по образцу. Результаты испытания выражаются количеством энергии,
                поглощенной образцом при разрушении. Чем выше величина Шарпи, тем больше гибкость материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Korroz" tabindex="-1" role="dialog" aria-labelledby="Modal_Korroz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Korroz_Label">Коррозионная стойкость</h5>
            </div>
            <div class="modal-body">
                Способность материала к сопротивлению ухудшению его свойств при химической или электрохимической реакции
                в непосредственном контакте с окружающей средой. Существует много видов коррозии, и для каждого из них
                имеется свой метод защиты материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Koeff" tabindex="-1" role="dialog" aria-labelledby="Modal_Koeff_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Koeff_Label">Коэффициент пропускания, нормальный</h5>
            </div>
            <div class="modal-body">
                Нормальный коэффициент пропускания - это отнощение: (прошедший поток света)/(падающий поток). Он, как
                правило, выражается в процентах. Коэффициент пропускания зависит от толщины материала, поэтому результаты
                обычно приводятся к толщине в 1 мм. Для некоторых материалов это значение коэффициента пропускания может
                быть равно нулю, если они совершенно непрозрачны при малой толщине.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Kristal" tabindex="-1" role="dialog" aria-labelledby="Modal_Kristal_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Kristal_Label">Кристаллическая структура</h5>
            </div>
            <div class="modal-body">
                Структура с упорядоченным периодическим (регулярным) расположением атомов или молекул.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Lin" tabindex="-1" role="dialog" aria-labelledby="Modal_Lin_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Lin_Label">Линовка профиля </h5>
            </div>
            <div class="modal-body">
                Предельная линовка профиля - это максимальный диаметр круглого проката, в середине которого могут быть
                получены требуемые свойства материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Mart" tabindex="-1" role="dialog" aria-labelledby="Modal_Mart_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Mart_Label">Мартенсит </h5>
            </div>
            <div class="modal-body">
                Основной термин, применяемый для описания формы структуры железных сплавов, когда скорость охлаждения
                от аустенитового состояния слишком высокая и допускает диффузию атомов углерода из гранецентрированной
                кубической формы аустенита и превращение ее в объемно-центрированную форму феррита. Результатом является
                более высокая деформационная жесткость структуры.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_MPolz" tabindex="-1" role="dialog" aria-labelledby="Modal_MPolz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_MPolz_Label">Модуль ползучести </h5>
            </div>
            <div class="modal-body">
                Напряжение, деленное на деформацию для определенного момента времени. Начальные результаты испытания на
                ползучесть обычно представлены серией графиков деформации в зависимости от времени для различных уровней
                напряжения. Из этих графиков для определенного времени могут быть получены величины деформаций при
                различных напряжениях. Результирующие величины напряжение-деформация могут быть использованы к данным
                графика напряжение-деформация для определенного времени. Такой график называется изохронным графиком
                напряжение-деформация. Модуль ползучести не равен модулю растяжения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_MUpr" tabindex="-1" role="dialog" aria-labelledby="Modal_MUpr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_MUpr_Label">Модуль упругости, модуль Юнга</h5>
            </div>
            <div class="modal-body">
                Коэффициент, характеризующий упругие свойства твердых тел и являющийся коэффициентом пропорциональности
                Е между деформацией и приложенными механическими напряжениями и наоборот. Модуль упругости Е - отношение
                растягивающего напряжения &sigma; к относительному удлинению &epsilon; : Е = &sigma; / &epsilon;.
                Графически модуль упругости, или модуль Юнга, это тангенс угла наклона в графике напряжение-деформация
                на его начальном прямолинейном участке:
                <p><img src="/front_user/img/юнга.png" height="213" width="204"/></p>
                <p><em> Модуль напряжения АВ/ВС </em></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_MSech" tabindex="-1" role="dialog" aria-labelledby="Modal_MSech_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_MSech_Label">Модуль сечения</h5>
            </div>
            <div class="modal-body">
                Для большинства полимерных материалов нет линейного участка графика напряжение-деформация, поэтому
                невозможно оценить их модуль растяжения. В таких случаях используется модуль сечения. Этот модуль
                определяется как напряжение при величине деформации в 0.2%, деленное на эту деформацию.
                <p><img src="/front_user/img/сечение.png" height="234" width="180"/></p>
                <p><em> Модуль сечения АВ/ВС </em></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Monom" tabindex="-1" role="dialog" aria-labelledby="Modal_Monom_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Monom_Label">Мономер </h5>
            </div>
            <div class="modal-body">
                Низкомолекулярное соединение вещества, молекулы которого способны реагировать между собой или с молекулами
                других веществ с образованием полимера.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Napoln" tabindex="-1" role="dialog" aria-labelledby="Modal_Napoln_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Napoln_Label">Наполнители </h5>
            </div>
            <div class="modal-body">
                Пластмассы и резины, а также полимеры почти всегда содержат в себе другие материалы. Их вводят для изменения
                свойств и удешевления материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Napr" tabindex="-1" role="dialog" aria-labelledby="Modal_Napr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Napr_Label">Напряжение (механическое) </h5>
            </div>
            <div class="modal-body">
                В технике механическое напряжение растяжения и сжатия обычно определяется как отношение: (сила)/
                (начальная площадь поперечного сечения образца). Истинное напряжение - это отношение: (сила)/
                (площадь поперечного сечения образца, которую образец имеет в этот момент). Сдвигающее напряжение -
                это отношение:(сдвигающая сила)/ (площадь образца, сопротивляющаяся сдвигу). Механическое напряжение
                имеет размерность Па (паскаль), или Н * м<sup>-2</sup>, причем 1 Па = 1 Н * м<sup>-2</sup>.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Naug" tabindex="-1" role="dialog" aria-labelledby="Modal_Naug_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Naug_Label">Науглероживание </h5>
            </div>
            <div class="modal-body">
                Состояние затвердевания, в результате которого на поверхности железных сплавов образуется твердый слой.
                Обработка включает в себя нагрев сплава до состояния аустенизации в атмосфере, обогащенной углеродом,
                благодаря чему углерод диффундирует внутрь поверхностных слоев, закаливая их к тому же до превращения в
                мартенсит.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Norm" tabindex="-1" role="dialog" aria-labelledby="Modal_Norm_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Norm_Label">Нормализация</h5>
            </div>
            <div class="modal-body">
                Тепловая обработка, включающая в себя нагрев железного сплава до температуры, при которой происходит
                полная аустенизация структуры с последующим охлаждением на воздухе. В результате этого появляется более
                мягкий материал, но мягкий не сам по себе, а вследствие проведения отжига.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Obrab" tabindex="-1" role="dialog" aria-labelledby="Modal_Obrab_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Obrab_Label">Обрабатываемость на станках</h5>
            </div>
            <div class="modal-body">
                Не существует общепринятого стандарта испытания на обрабатываемость. Она базируется на эмпирических
                данных испытания и потому субъективна. Обрабатываемость измеряется на различных встречающихся в
                механической обработке материалах.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Orient" tabindex="-1" role="dialog" aria-labelledby="Modal_Orient_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Orient_Label">Ориентация </h5>
            </div>
            <div class="modal-body">
                Метод повышения механических свойств полимеров. Любой из видов полимеров - кристаллических или
                стеклообразных - может быть ориентирован при медленном растяжении, если он находится в высокоэластичном
                или вязкотекучем состоянии. Макромолекулы ориентируются при действии высоких температур и механических
                напряжений - вытяжки вдоль ориентированных вытянутых молекул, приобретают упорядоченную структуру по
                сравнению с неориентированными. После достижения нужной степени ориентации температура снижается и
                полученная структура фиксируется. Прочность при разрыве и модуль упругости в направлении ориентации
                увеличиваются. Различают одно- и многоосную ориентацию в одном и нескольких направлениях.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Ost" tabindex="-1" role="dialog" aria-labelledby="Modal_Ost_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Ost_Label">Остаточные напряжения </h5>
            </div>
            <div class="modal-body">
                Напряжения, остающиеся в материале, который был подвернут пластической деформации, после снятия нагрузки.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Otj" tabindex="-1" role="dialog" aria-labelledby="Modal_Otj_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Otj_Label">Отжиг </h5>
            </div>
            <div class="modal-body">
                Процесс, включающий нагрев и выдержку материала при достаточно высокой температуре для приведения его
                в конечном итоге к пластическому состоянию после охлаждения с соответствующей скоростью, как правило,
                медленной. В случае железных сплавов требующаяся температура отжига выше критической температуры. Цель
                отжига может заключаться в том, чтобы облегчить холодную обработку метериала, улучшить эффективность
                инструмента, механические свойства материала и т.п.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_OMag" tabindex="-1" role="dialog" aria-labelledby="Modal_OMag_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_OMag_Label">Относительная магнитная проницаемость </h5>
            </div>
            <div class="modal-body">
                Ее определяют как отношение индукции в материале к индукции в положении, когда материал помещен в вакуум,
                и измеряют по магнитным свойствам материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_OUd" tabindex="-1" role="dialog" aria-labelledby="Modal_OUd_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_OUd_Label">Относительное удлинение тела</h5>
            </div>
            <div class="modal-body">
                Эта величина определяется так:
               <p> <img src="/front_user/img/оут.png" height="90" width="370"/></p>
                <p>Измеряется у пластичных металлов. Более высокий процент удлинения получается у материалов с большей
                пластичностью. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_OUm" tabindex="-1" role="dialog" aria-labelledby="Modal_OUm_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_OUm_Label">Относительное уменьшение площади поперечного сечения тела</h5>
            </div>
            <div class="modal-body">
                Эта величина определяется так:
                <p><img src="/front_user/img/оуп.png" height="86" width="469"/></p>
                <p>Является мерой пластичности материала. Более высокий процент получается у материалов с большей
                пластичностью. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Perlit" tabindex="-1" role="dialog" aria-labelledby="Modal_Perlit_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Perlit_Label">Перлит </h5>
            </div>
            <div class="modal-body">
                Слоистая структура феррита и карбида железа.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PlasDef" tabindex="-1" role="dialog" aria-labelledby="Modal_PlasDef_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PlasDef_Label">Пластическая деформация</h5>
            </div>
            <div class="modal-body">
                Вид деформации, при которой снятие нагрузки с деформируемого образца не вызывает полного восстановления
                его свойств и геометрических характеристик.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Modal_PlasMat" tabindex="-1" role="dialog" aria-labelledby="Modal_PlasMat_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PlasMat_Label">Пластические материалы</h5>
            </div>
            <div class="modal-body">
                Материалы, показывающие до разрушения значительную величину пластической деформации.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PlasRaz" tabindex="-1" role="dialog" aria-labelledby="Modal_PlasRaz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PlasRaz_Label">Пластический разрыв</h5>
            </div>
            <div class="modal-body">
                Процесс, в котором до разрушения наблюдается значительная величина пластической деформации. У металлов
                излом представляет типичный конус и образование в форме чашки, а поверхность излома грубая и по виду
                волокнистая.
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Plot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Plot_Label">Плотность </h5>
            </div>
            <div class="modal-body">
                Масса, содержащаяся в единице объема.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Poverh" tabindex="-1" role="dialog" aria-labelledby="Modal_Poverh_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Poverh_Label">Поверхностное упрочнение</h5>
            </div>
            <div class="modal-body">
                Основной термин, применяемый для описания ряда процессов, после проведения которых поверхность сплава на
                железной основе становится тверже, чем его сердцевина.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Povysh" tabindex="-1" role="dialog" aria-labelledby="Modal_Povysh_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Povysh_Label">Повышение твердости выделением вторичных фаз</h5>
            </div>
            <div class="modal-body">
                Процесс тепловой обработки, в результате которого выделяются вторичные фазы (преципиаты, дисперсионное
                твердение) таким путем, что происходит твердение материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Pogl" tabindex="-1" role="dialog" aria-labelledby="Modal_Pogl_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Pogl_Label">Поглощение воды </h5>
            </div>
            <div class="modal-body">
                Процентный прирост массы полимерного материала после погружения его в воду на определенное время при
                контролируемых условиях.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Pok" tabindex="-1" role="dialog" aria-labelledby="Modal_Pok_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Pok_Label">Показатель преломления</h5>
            </div>
            <div class="modal-body">
                Отношение: (скорость света в вакууме)/(скорость света в материале). Для материала скорость света зависит
                от направления прохождения света через материал, и поэтому показатель преломления изменяется с изменением
                направления прохождения света.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Polz" tabindex="-1" role="dialog" aria-labelledby="Modal_Polz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Polz_Label">Ползучесть </h5>
            </div>
            <div class="modal-body">
                Непрерывная деформация материала с течением времени, когда его подвергают постоянному напряжению. Для
                определенного материала ползучесть зависит от режима работы, т.е. от температуры и начального напряжения,
                а режим работы, в свою очередь, зависит также от свойств материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Poln" tabindex="-1" role="dialog" aria-labelledby="Modal_Poln_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Poln_Label">Полностью твердый</h5>
            </div>
            <div class="modal-body">
                Термин применяется для описания степени твердости сплавов. Это есть состояние наклепанного материала.
                Вне этого состояния материал недолго будет работоспособным.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Polutv" tabindex="-1" role="dialog" aria-labelledby="Modal_Polutv_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Polutv_Label">Полутвердый </h5>
            </div>
            <div class="modal-body">
                Термин применяется для описания степени твердости сплавов. Это есть состояние наклепанного материала
                на половине пути между мягким и полностью твердым.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PravH" tabindex="-1" role="dialog" aria-labelledby="Modal_PravH_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PravH_Label">Правило Хоукса</h5>
            </div>
            <div class="modal-body">
                Если материал подчиняется правилу Хоукса, то его удлинение прямо пропорционально прикладываемой силе.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrDolg" tabindex="-1" role="dialog" aria-labelledby="Modal_PrDolg_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrDolg_Label">Предел долговечности</h5>
            </div>
            <div class="modal-body">
                Это величина напряжения, при котором испытуемый образец имеет срок долговечности, равный N циклам напряжения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrPolz" tabindex="-1" role="dialog" aria-labelledby="Modal_PrPolz_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrPolz_Label">Предел ползучести</h5>
            </div>
            <div class="modal-body">
                Напряжение, требующееся для создания данной деформации, под действием которой материал деформируется
                на определенную величину за определенное время при заданной температуре.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrProp" tabindex="-1" role="dialog" aria-labelledby="Modal_PrProp_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrProp_Label">Предел пропорциональности</h5>
            </div>
            <div class="modal-body">
                Вплоть до предела пропорциональности удлинение образца прямо пропорционально растягивающим силам, т.е.
                деформация пропорциональна прикладываемому напряжению:
                <p><img src="/front_user/img/предел.png" height="298" width="311"/></p>
                <p><em>График напряжение-деформация</em></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrProch" tabindex="-1" role="dialog" aria-labelledby="Modal_PrProch_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrProch_Label">Предел прочности на растяжение, временное сопротивление</h5>
            </div>
            <div class="modal-body">
                Показатель прочности материала, предшествующей разрушению. Его определяют как отношение:
                (максимальная сила до разрушения)/(начальная площадь поперечного сечения образца).
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrProch1" tabindex="-1" role="dialog" aria-labelledby="Modal_PrProch1_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrProch1_Label">Предел прочности на сжатие</h5>
            </div>
            <div class="modal-body">
                Это максимальное сжимающее напряжение, выдерживаемое материалом до разрушения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrUpr" tabindex="-1" role="dialog" aria-labelledby="Modal_PrUpr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrUpr_Label">Предел упругости</h5>
            </div>
            <div class="modal-body">
                Характеристика пружинных материалов, используемых для упругих приборов и машин. Максимальная сила
                (или напряжение), при которой, когда она снята, материал возвращается к своим первоначальным размерам.
                Для многих материалов предел упругости и предел пропорциональности один и тот же: это предельная
                максимальная сила, до которой растяжение пропорционально силе, или максимальное напряжение, до
                которого деформация пропорциональна напряжению.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_PrUst" tabindex="-1" role="dialog" aria-labelledby="Modal_PrUst_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_PrUst_Label">Предел усталости (выносливости)</h5>
            </div>
            <div class="modal-body">
                Это величина наибольшего напряжения, которое материал будет выдерживать без разрушения за заданное число
                циклов N.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Prob" tabindex="-1" role="dialog" aria-labelledby="Modal_Prob_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Prob_Label">Пробное напряжение</h5>
            </div>
            <div class="modal-body">
                Пробное напряжение в 0.2% определяют как такое напряжение, которое смещает результаты испытания на 0.2%,
                т.е. напряжение задается на кривой растяжения на графике напряжение-деформация при пересечении прямыми,
                параллельными линейной части графика, проходящими через 0.2%-ное значение деформации. Пробное напряжение
                в 0.1% определяется аналогичным образом. Пробные напряжения указываются, когда материал имеет не вполне
                опеределнную точку текучести.
                <p><img src="/front_user/img/деформация.png" height="304" width="356"/></p>
                <p><em>Деформация пробным напряжением</em></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Prok" tabindex="-1" role="dialog" aria-labelledby="Modal_Prok_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Prok_Label">Прокаливаемость</h5>
            </div>
            <div class="modal-body">
                Термин применяется для описания меры глубины повышенной твердости, распространяющейся внутрь материала
                при закалке.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Pron" tabindex="-1" role="dialog" aria-labelledby="Modal_Pron_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Pron_Label">Проницаемость </h5>
            </div>
            <div class="modal-body">
                Термин описывает скорость, с которой газы или пары проходят сквозь материал. Скорость прохождения через
                единицу площади поверхности материала определяется так:
                <p><img src="/front_user/img/проницаемость.png" height="73" width="318"/></p>
                <p>где Р - коэффициент проницаемости, р<sub>1</sub> и р<sub>2</sub> - давление соответсвенно на каждой
                стороне материала и L - толщина материала. Применяют разнообразные единицы для обозначения
                проницаемости: то же давление одни исследователи дают в сантиметрах ртутного столба, другие в Па или
                Н * м<sup>-1</sup>; время может быть дано в днях или секундах; скорость - в терминах объема в кубических
                сантиметрах (см<sup>3</sup>) или массы в молях или килограммах (кг), или граммах (г).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Proch" tabindex="-1" role="dialog" aria-labelledby="Modal_Proch_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Proch_Label">Прочность</h5>
            </div>
            <div class="modal-body">
                Способность материала сопротивляться тем или иным воздействиям без разрушения. Единица измерения в СИ -
                Н * м/кг.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Ravn" tabindex="-1" role="dialog" aria-labelledby="Modal_Ravn_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Ravn_Label">Равновесная диаграмма</h5>
            </div>
            <div class="modal-body">
                Это диаграмма для металлов, построенная на большом числе экспериментальных данных, у которой кривые
                охлаждения известны для всего диапазона какой-нибудь группы сплавов. По диаграмме можно также предсказать
                состояние сплава определенного состава, если он нагрет или охлажден до некоторой температуры.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Razr" tabindex="-1" role="dialog" aria-labelledby="Modal_Razr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Razr_Label">Разрывное напряжение при растяжении</h5>
            </div>
            <div class="modal-body">
                Предельное растягивающее напряжение после наступления предела прочности, вызывающее разрыв материала в
                наиболее тонком месте образца - шейке, где сосредотачивается пластическая деформация.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Rassh" tabindex="-1" role="dialog" aria-labelledby="Modal_Rassh_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Rassh_Label">Расширение, температурный коэффициент линейного расширения</h5>
            </div>
            <div class="modal-body">
                Это величина, характеризующая увеличение единицы длины материала, когда его температура возрастает на
                один градус. Его определяют по формуле:
                <p><img src="/front_user/img/расширение.png" height="88" width="435"/></p>
                <p>Размерность: &deg;C<sup>-1</sup> или K<sup>-1</sup>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_RasshLin" tabindex="-1" role="dialog" aria-labelledby="Modal_RasshLin_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_RasshLin_Label">Расширение линейное</h5>
            </div>
            <div class="modal-body">
                Альтернативное название температурного коэффициента линейного расширения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Rez" tabindex="-1" role="dialog" aria-labelledby="Modal_Rez_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Rez_Label">Результаты испытания Виккерса</h5>
            </div>
            <div class="modal-body">
                Испытание Виккерса применяется для измерения твердости материала. Чем больше число твердости по Виккерсу,
                тем больше твердость материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Rec" tabindex="-1" role="dialog" aria-labelledby="Modal_Rec_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Rec_Label">Рекристаллизация </h5>
            </div>
            <div class="modal-body">
                Описывает в основном процесс обновления, освобождения нагревом зернистой структуры от деформации,
                созданной в наклепанном металле.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Siod" tabindex="-1" role="dialog" aria-labelledby="Modal_Siod_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Siod_Label">Синдиотактическая структура </h5>
            </div>
            <div class="modal-body">
                Полимерная структура, в которой молекулы боковых групп регулярно чередуются по обеим сторонам молекулярной
                цепочки.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Snyat" tabindex="-1" role="dialog" aria-labelledby="Modal_Snyat_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Snyat_Label">Снятие напряжения</h5>
            </div>
            <div class="modal-body">
                Обработка по снижению остаточных напряжений при нагреве материала до нужной температуры с последующим
                медленным охлаждением.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Sootn" tabindex="-1" role="dialog" aria-labelledby="Modal_Sootn_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Sootn_Label">Соотношение Пуассона</h5>
            </div>
            <div class="modal-body">
                Отношение: (поперечная деформация)/(продольная деформация).
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Sopol" tabindex="-1" role="dialog" aria-labelledby="Modal_Sopol_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Sopol_Label">Сополимер </h5>
            </div>
            <div class="modal-body">
                Полимерный материал, состоящий из комбинации двух или трех мономеров в простой полимерной цепочке.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Sopr" tabindex="-1" role="dialog" aria-labelledby="Modal_Sopr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Sopr_Label">Сопротивление срезу </h5>
            </div>
            <div class="modal-body">
                Срезающее напряжение, требующееся для получения излома.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Spek" tabindex="-1" role="dialog" aria-labelledby="Modal_Spek_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Spek_Label">Спекание </h5>
            </div>
            <div class="modal-body">
                Процесс, при котором порошки связываются молекулярным или атомным притяжением в результате нагрева до
                температуры ниже точки плавления этих порошков.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Splav" tabindex="-1" role="dialog" aria-labelledby="Modal_Splav_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Splav_Label">Сплав</h5>
            </div>
            <div class="modal-body">
                Металлический материал, полученный при затвердевании расплавов компонентов, из которых по крайней мере
                один является металлом.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Spos" tabindex="-1" role="dialog" aria-labelledby="Modal_Spos_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Spos_Label">Способность к сварке</h5>
            </div>
            <div class="modal-body">
                Способность к сварке определенной комбинации материалов указывает на легкость, с какой может быть
                выполнена качественная сварка.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Srez" tabindex="-1" role="dialog" aria-labelledby="Modal_Srez_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Srez_Label">Срез </h5>
            </div>
            <div class="modal-body">
                Разрушение при сдвиге одной части материала относительно другой под действием касательных напряжений.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Star" tabindex="-1" role="dialog" aria-labelledby="Modal_Star_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Star_Label">Старение</h5>
            </div>
            <div class="modal-body">
                Термин применяется для описания изменения свойств у некоторых металлов и сплавов при окружающей
                (комнатной) температуре (естественное С), после горячей или холодной обработки (искусственное С).
                Это изменение вызвано в основном имеющимися выделениями вторичных фаз (преципитатным, или так
                называемым дисперсионным, твердением), не изменяющими химических свойств соединения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_StarM" tabindex="-1" role="dialog" aria-labelledby="Modal_StarM_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_StarM_Label">Старение мартенсита</h5>
            </div>
            <div class="modal-body">
                Обработка путем повышения твердости выделением вторичных фаз, применяемая к тем же самым железным сплавам.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Step" tabindex="-1" role="dialog" aria-labelledby="Modal_Step_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Step_Label">Степень твердости</h5>
            </div>
            <div class="modal-body">
                Термин применяется к цветным сплавам как индикатор степени твердость/прочность со следующей градацией:
                твердый, полутвердый, три четверти твердости.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Sfer" tabindex="-1" role="dialog" aria-labelledby="Modal_Sfer_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Sfer_Label">Сфероидизация </h5>
            </div>
            <div class="modal-body">
                Обработка для создания сферических или шаровидных форм карбида в стали.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Tverd" tabindex="-1" role="dialog" aria-labelledby="Modal_Tverd_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Tverd_Label">Твердость </h5>
            </div>
            <div class="modal-body">
                Твердость материала может быть охарактеризована в тех же самых терминах стандартного испытания, включающего
                в себя вдавливание индентора (образца материала), например по Бринеллю, Виккерсу или Роквеллу, или
                царапание поверхности материала, применяемого в испытании по Моосу.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_TempP" tabindex="-1" role="dialog" aria-labelledby="Modal_TempP_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_TempP_Label">Температура перехода </h5>
            </div>
            <div class="modal-body">
                Температура, при которой материал изменяется от состояния вязкого до состояния хрупкого разрушения.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_TempPS" tabindex="-1" role="dialog" aria-labelledby="Modal_TempPS_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_TempPS_Label">Температура перехода в стеклообразное состояние </h5>
            </div>
            <div class="modal-body">
                Температура, при которой полимер изменяется от гибкого до жесткого состояния. Модуль растяжения при этом
                показывает резкое изменение от низкого значения, свойственного резине, до высокого, свойственного
                стеклообразному материалу.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Tepl" tabindex="-1" role="dialog" aria-labelledby="Modal_Tepl_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Tepl_Label">Тепловое коробление/прогибание температурой</h5>
            </div>
            <div class="modal-body">
                Определенная величина относительного прогиба, которую показывает узкая полоска полимерного материала под
                специальной нагрузкой при определенной температуре.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Teplop" tabindex="-1" role="dialog" aria-labelledby="Modal_Teplop_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Teplop_Label">Теплопроводность</h5>
            </div>
            <div class="modal-body">
                Это скорость переноса энергии в форме тепла через материал, зависящая пропорционально от коэффициента
                теплопроводности. Коэффициент теплопроводности определяется так:
                <p><img src="/front_user/img/тепло.png" height="92" width="500"/></p>
                <p>Коэффициент теплопроводности имеет размерность Вт * м<sub>-1</sub> * К<sub>-1</sub>. Более высокая
                теплопроводность определяет большую скорость передачи тепла от более нагретого участка образца к менее
                    нагретому, что приводит к выравниванию температуры образца.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Teplos" tabindex="-1" role="dialog" aria-labelledby="Modal_Teplos_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Teplos_Label">Теплостойкий сплав</h5>
            </div>
            <div class="modal-body">
                Сплав, разработанный для применения при высоких температурах.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Term" tabindex="-1" role="dialog" aria-labelledby="Modal_Term_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Term_Label">Термическая обработка на твердый раствор</h5>
            </div>
            <div class="modal-body">
                Тепловая обработка, включающая в себя нагрев сплава до необходимой температуры, выдержка его при этой
                температуре в течение промежутка времени, достаточного для перехода в твердый раствор одного или более
                входящих в него элементов, и охлаждение со скоростью, достаточной для перехода его в твердый раствор.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_TochP" tabindex="-1" role="dialog" aria-labelledby="Modal_TochP_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_TochP_Label">Точка плавления</h5>
            </div>
            <div class="modal-body">
                Температура, при которой материал переходит из твердого состояния в жидкое.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_TochR" tabindex="-1" role="dialog" aria-labelledby="Modal_TochR_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_TochR_Label">Точка размягчения </h5>
            </div>
            <div class="modal-body">
                Для многих мателлов, когда растягивающая сила. прикладываемая к испытываемому образцу, устойчиво растет,
                наступит момент, когда длина начнет увеличиваться не пропорционально прикладываемой силе, а быстрее до
                тех пор, пока сила не достигнет максимума. Это значение называют верхней точкой размягчения. Затем сила
                падает до значения, называемого нижней точкой размягчения, и вновь увеличивается, когда вытягивание
                опять будет непрерывным.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Trans" tabindex="-1" role="dialog" aria-labelledby="Modal_Trans_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Trans_Label">Транс-структура </h5>
            </div>
            <div class="modal-body">
                Один из двух видов изомерии (пространственное расположение) одинаковых групп относительно углеродной цепи
                полимера. Это полимерная структура, в которой одинаковые группы, например Н и СН<sub>3</sub>, соединенные
                с двойной связью углеродной цепи, расположены по разные стороны от двойной связи.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Tren" tabindex="-1" role="dialog" aria-labelledby="Modal_Tren_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Tren_Label">Трение, коэффициент трения</h5>
            </div>
            <div class="modal-body">
                Коэффициент трения - это максимальное значение силы трения, градуированной к нормальной силе. В ситуации,
                когда объект начинает движение, максимальная сила трения равна силе, требующейся для старта скользящего
                объекта. Когда объект находится уже в движении, сила трения - это такая сила, которая требуется для
                подержания движения с постоянной скоростью. Она меньше, чем сила трения - это такая сила, которая требуется
                для поддержания движения с постоянной скоростью. Она меньше, чем сила трения, необходимая для старта
                скользящей части - статический и динамический, причем статической коэффициент больше динамического.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_UdT" tabindex="-1" role="dialog" aria-labelledby="Modal_UdT_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_UdT_Label">Удельная теплоемкость </h5>
            </div>
            <div class="modal-body">
                Ее определяют так:
                <p><img src="/front_user/img/удел.png" height="67" width="487"/></p>
                <p>Количество поглощенного тепла, когда растет температура материала при нагревании, зависит от его удельной
                теплоемкости. Чем выше удельная теплоемкость материала, тем меньше рост температуры на единицу массы для
                данного количества поглощенного тепла. Удельная теплоемкость имеет размерность Дж * кг<sup>-1</sup> *
                К<sup>-1</sup>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_UdE" tabindex="-1" role="dialog" aria-labelledby="Modal_UdE_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_UdE_Label"> Удельная электропроводность </h5>
            </div>
            <div class="modal-body">
                Определяют по величине электропроводности цилиндрического проводника единичной длины и единичной площади
                сечения по формуле:
                <p><img src="/front_user/img/электропровод.png" height="125" width="536"/></p>
                <p>Электропроводность имеет размерность Ом<sup>-1</sup>, или См (сименс), а удельная электропроводность -
                    Ом<sup>-1</sup> * м<sup>-1</sup>. Удельная электропроводность измеряется на проводящем электричество
                    материале. Чем больше электропроводность, тем больше ток при определенной разности потенциалов.
                    Эталоном удельной электропроводности, согласно Международному стандарту на отожженную медную проволоку
                    (IACS), принята удельная электропроводность 100%-ной отожженной меди при 20&deg;С. Удельная
                    электропроводность всех других материалов выражается в процентном отношении к этому значению.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_ES" tabindex="-1" role="dialog" aria-labelledby="Modal_ES_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_ES_Label">Удельное электрическое сопротивление </h5>
            </div>
            <div class="modal-body">
                Величина, обратная удельной электропроводности. Ее измеряют на материале соответственно данному
                определению:
                <p><img src="/front_user/img/уд_эл.png" height="106" width="416"/></p>
                <p>Удельное сопротивление имеет размерность Ом * м</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Udel" tabindex="-1" role="dialog" aria-labelledby="Modal_Udel_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Udel_Label">Удельный вес</h5>
            </div>
            <div class="modal-body">
                Удельным весом материала &gamma; называется отношение его плотности к плотности воды:
                <p><img src="/front_user/img/уд_вес.png" height="85" width="346"/></p>
                <p>Единица удельного веса в СИ - Н * м<sup>-3</sup> </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_UprV" tabindex="-1" role="dialog" aria-labelledby="Modal_UprV_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_UprV_Label">Упругое восстановление формы после деформации, частичное</h5>
            </div>
            <div class="modal-body">
                Определяется как деформация, вернувшаяся в исходное состояние, деленная на ползучую деформацию, когда
                нагрузка снята.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_UprD" tabindex="-1" role="dialog" aria-labelledby="Modal_UprD_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_UprD_Label">Упругая деформация</h5>
            </div>
            <div class="modal-body">
                Вид деформации, при которой снятие нагрузки с деформируемого образца полностью возвращает его в исходное
                состояние. Объем и форма образца полностью восстанавливаются.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Ust" tabindex="-1" role="dialog" aria-labelledby="Modal_Ust_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Ust_Label">Усталостная прочность</h5>
            </div>
            <div class="modal-body">
                Усталостная прочность при N циклах напряжения - это величина напряжения, ниже которой испытуемый образец
                имеет срок службы, равный N циклам.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Fer" tabindex="-1" role="dialog" aria-labelledby="Modal_Fer_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Fer_Label">Феррит </h5>
            </div>
            <div class="modal-body">
                Твердый раствор из одного или более элементов в форме центрированной кубической решетки железа. В него
                обычно входит углерод.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_HrupM" tabindex="-1" role="dialog" aria-labelledby="Modal_HrupM_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_HrupM_Label">Хрупкий материал </h5>
            </div>
            <div class="modal-body">
                Материал, имеющий незначительную пластическую деформацию до его излома. Например, применяемый для фарфоровых
                чашек материал является хрупким, он имеет незначительную пластическую деформацию, до того как разрушится.
                Сломанная чайная чашка может быть склеена, что даст чашку тех же размера и формы, как и оригинал.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_HrupR" tabindex="-1" role="dialog" aria-labelledby="Modal_HrupR_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_HrupR_Label">Хрупкое разрушение </h5>
            </div>
            <div class="modal-body">
                Разрушение, при котором трещина зарождается и распространяется до некоторой значительной пластической
                деформации. Поверхность металла при хрупком разрушении блестит, а ее зернистость обусловлена отражением
                света от отдельных кристаллов. В полимерных материалах поверхность излома может быть гладкой и зеркальной
                или отчасти расколотой и неровной.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Cemen" tabindex="-1" role="dialog" aria-labelledby="Modal_Cemen_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Cemen_Label">Цементация </h5>
            </div>
            <div class="modal-body">
                Термин применяется для описания процессов изменения состава поверхностных слоев железных сплавов с
                образованием твердого поверхностного слоя.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Cementit" tabindex="-1" role="dialog" aria-labelledby="Modal_Cementit_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Cementit_Label">Цементит</h5>
            </div>
            <div class="modal-body">
                Соединение, образованное из железа и углерода, часто называется карбид железа.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Cis" tabindex="-1" role="dialog" aria-labelledby="Modal_Cis_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Cis_Label">Цис-структура</h5>
            </div>
            <div class="modal-body">
                Один из двух видов изомерии (пространственное расположение) одинаковых групп относительно углеродной цепи
                полимера. Это полимерная структура, в которой одинаковые группы, например Н и СН<sub>3</sub>,
                соединенные с двойной связью углеродной цепи, расположены по одну сторону от двойной связи.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Chisl" tabindex="-1" role="dialog" aria-labelledby="Modal_Chisl_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Chisl_Label">Число твердости по Бринеллю (НВ)</h5>
            </div>
            <div class="modal-body">
                Число, которое присваивается материалу по результатам испытания Бринелля, т.е. измерения твердости материала.
                Чем больше число, тем тверже материал. Оно определяется как отношение нагрузки на индентор (стальной шарик)
                к площади поверхности отпечатка на материале.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Shkal" tabindex="-1" role="dialog" aria-labelledby="Modal_Shkal_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Shkal_Label">Шкала по Моосу</h5>
            </div>
            <div class="modal-body">
                Шкала твердости для определения твердости материала методом царапания набором из 10 минералов, расположенных
                в порядке возрастания твердости. Это 10-балльная числовая шкала относительной твердости минералов, более
                высокое число для более твердого материала.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Elast" tabindex="-1" role="dialog" aria-labelledby="Modal_Elast_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Elast_Label">Эластичность</h5>
            </div>
            <div class="modal-body">
                Термин характеризует упругие свойства полимеров. Способность материала к большим обратимым изменениям
                формы при малых нагрузках из-за колебания звеньев, и поэтому макромолекула способна изгибаться.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal_Electr" tabindex="-1" role="dialog" aria-labelledby="Modal_Electr_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Electr_Label">Электрическая прочность диэлектрика</h5>
            </div>
            <div class="modal-body">
                Параметр диэлектрика для определения его способности противостоять пробою. Это напряженность электрического
                поля в диэлектрике Е<sub>пр</sub>, при которой происходит пробой. Изменяется как отношение напряжения
                пробоя V<sub>пр</sub> (минимальной разности потенциалов на диэлектрике, вызывающей пробой) к толщине
                диэлектрика d в месте пробоя и равна:
                <p><img src="/front_user/img/прочность.png" height="70" width="136"/></p>
                <p>Измеряется в СИ в МВ/м (мегавольт на метр). Удобнее использовать эквивалентную размерность - кВ/мм
                    (киловольт на миллиметр)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

@stop