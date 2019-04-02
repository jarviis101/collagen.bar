<button class="btn-custom btn-no-margin d-flex 
d-sm-none d-md-none d-lg-none d-xl-none" 
id="btn-filt">Фильтры <i class="fas fa-filter"></i></button>

<form method="POST" action="/filter_hairCare" class="filter row" id="filter-form-hair">
    {{-- {{ csrf_field() }} --}}
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Тип ухода</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type1" value="first_type" name="type[]">
              <label class="custom-control-label" for="type1">Профессиональная серия</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type2" value="second_type" name="type[]">
              <label class="custom-control-label" for="type2">Домашний уход</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Страна производителя</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="jpn" value="japan" name="country[]">
              <label class="custom-control-label" for="jpn">Япония</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="eur" value="eur" name="country[]">
              <label class="custom-control-label" for="eur">Европа</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="other" value="other" name="country[]">
              <label class="custom-control-label" for="other">Другие</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Бренды</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand1" value="shiseido" name="brand[]">
              <label class="custom-control-label" for="brand1">Shiseido</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand2" value="lebel" name="brand[]">
              <label class="custom-control-label" for="brand2">Lebel</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand3" value="artego" name="brand[]">
              <label class="custom-control-label" for="brand3">Artego</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand4" value="chi" name="brand[]">
                <label class="custom-control-label" for="brand4">Chi</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand5" value="other" name="brand[]">
                <label class="custom-control-label" for="brand5">Другие</label>
              </div>
        </div>
    </div>		
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Типы волос</h5>
        </div>
        <div class="row flex-column">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type_of_hair1" value="normal" name="type_of_hair[]">
              <label class="custom-control-label" for="type_of_hair1">Нормальные</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type_of_hair2" value="thin" name="type_of_hair[]">
              <label class="custom-control-label" for="type_of_hair2">Тонкие</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type_of_hair3" value="color" name="type_of_hair[]">
              <label class="custom-control-label" for="type_of_hair3">Окрашенные</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type_of_hair4" value="weakened" name="type_of_hair[]">
              <label class="custom-control-label" for="type_of_hair4">Ослабленные</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="type_of_hair5" value="damaged" name="type_of_hair[]">
              <label class="custom-control-label" for="type_of_hair5">Очень поврежденные</label>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 filter-block">
      <div class="row">
          <h5 class="titles-filter">Вид продукции</h5>
      </div>
      <div class="row flex-column">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type1" value="normal" name="product_type[]">
            <label class="custom-control-label" for="product_type1">Безсульфатные шампуни SLS</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type2" value="thin" name="product_type[]">
            <label class="custom-control-label" for="product_type2">Лечение (глубокая реконструкция)</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type3" value="color" name="product_type[]">
            <label class="custom-control-label" for="product_type3">Маски для волос</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type4" value="weakened" name="product_type[]">
            <label class="custom-control-label" for="product_type4">Спрей (глубокое увлажнение)</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type5" value="damaged" name="product_type[]">
            <label class="custom-control-label" for="product_type5">Бальзамы/Кондиционеры</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="product_type6" value="damaged" name="product_type[]">
            <label class="custom-control-label" for="product_type6">Наборы (SET)</label>
          </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row">
            <h5 class="titles-filter">Цена</h5>
        </div>
        <div class="row flex-row">
            <div class="form-group col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
            <input type="text" class="form-control" id="min" name="min-price">
            </div>
            <span class="divider"> - </span>
            <div class="form-group col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
                <input type="text" class="form-control" id="max" name="max-price">
            </div>
        </div>
    </div>
    
    <div class="col-12 col-sm-3 col-md-12 col-lg-12 col-xl-12 filter-block">
        <div class="row justify-content-start">
            <button type="submit" class="col-10 col-sm-12 col-md-8 col-lg-6 col-xl-6 btn-custom" id="submit">Подтвердить</button>
        </div>
    </div>
</form>