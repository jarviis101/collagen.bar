<button class="btn-custom btn-no-margin d-flex 
d-sm-none d-md-none d-lg-none d-xl-none" 
id="btn-filt">Фильтры <i class="fas fa-filter"></i></button>

<form method="POST" action="/filter_collagen" class="filter row" id="filter-form-coll">
    {{-- {{ csrf_field() }} --}}
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Типы коллагена</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type1" value="first_type" name="type1">
              <label class="custom-control-label" for="type1">Тип 1 и 3(кожа)</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type2" value="second_type" name="type2">
              <label class="custom-control-label" for="type2">Тип 3(суставы)</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Страна производителя</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="jpn" value="japan" name="country1">
              <label class="custom-control-label" for="jpn">Япония</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="usa" value="usa" name="country2">
              <label class="custom-control-label" for="usa">США</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="other" value="other" name="country3">
              <label class="custom-control-label" for="other">Другие</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Форма выпуска</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="form1" value="hydro_f" name="form_issue1">
              <label class="custom-control-label" for="form1">Гидролизованный коллаген</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="form2" value="tablet_f" name="form_issue2">
              <label class="custom-control-label" for="form2">Таблетированная форма</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="form3" value="drink_f" name="form_issue3">
              <label class="custom-control-label" for="form3">Питьевой коллаген</label>
            </div>
        </div>
    </div>		
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Сырье</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="material1" value="sea" name="material1">
              <label class="custom-control-label" for="material1">Морского происхождения</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="material2" value="animals" name="material2">
              <label class="custom-control-label" for="material2">Животного происхождения</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-5 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Цена</h5>
        </div>
        <div class="row flex-row">
            <div class="form-group col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
            <input type="text" class="form-control" id="min" value="" name="min-price">
            </div>
            <span class="divider"> - </span>
            <div class="form-group col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
                <input type="text" class="form-control" id="max" value="" name="max-price">
            </div>
        </div>
    </div>
    
    <div class="col-12 col-sm-3 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row justify-content-start">
            <button type="submit" class="col-10 col-sm-12 col-md-8 col-lg-6 col-xl-6 btn-custom" id="submit">Подтвердить</button>
        </div>
    </div>
</form>