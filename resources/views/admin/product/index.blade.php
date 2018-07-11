@extends('admin.product.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('product.create') }}">Thêm mới sản phẩm</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('product.search') }}">
         {{ csrf_field() }}
         @component('admin.layouts.search', ['title' => 'Tìm kiếm'])
          @component('admin.product.search-panel.two-cols-search-row', ['items' => ['Name'],
          'oldVals' => [isset($searchingVals) ? $searchingVals['name'] : '']])
          @endcomponent
          <br>
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên sản phẩm</th>
                <th width="12%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Giá thành</th>
                <th width="6%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Khuyến mại</th>
                <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Loại sản phẩm</th>
                <th width="15%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nhóm sản phẩm</th>
                <th  width="35%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2">Hành động</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $item)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $item->name }}</td>
                  <td>{{ str_replace(',', '.', number_format($item->price, 0)) }}</td>
                  <td>{{ str_replace(',', '.', number_format($item->discount, 0)) }}</td>
                  <td>{{ (!empty($type_collection[$item->type_id]))? $type_collection[$item->type_id] : '' }}</td>
                  <td>{{ (!empty($kind_collection[$item->kind_id]))? $kind_collection[$item->kind_id] : '' }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('product.destroy', ['id' => $item->id]) }}" onsubmit = "return confirm('Chắc chắn xoá?')">
                        <button class="btn btn-primary collapsed col-sm-2 col-xs-5 btn-margin" type="button" data-toggle="collapse" href="#{{ $item->id }}" aria-expanded="true" aria-controls="messageContent">Chi tiết</button>

                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('product.edit', ['id' => $item->id]) }}" class="btn btn-warning col-sm-2 col-xs-5 btn-margin">
                        Sửa
                        </a>
                        {{--@if ($user->username != Auth::user()->username)--}}
                         <button type="submit" class="btn btn-danger col-sm-2 col-xs-5 btn-margin">
                          Xoá
                        </button>
                        {{--@endif--}}
                        <a href="{{ route('comment.fetchProductComment', ['id' => $item->id]) }}" class="btn btn-warning col-sm-2 col-xs-5 btn-margin">
                        Bình luận
                        </a>
                    </form>
                  </td>
              </tr>
              <tr>
                <td colspan="7" class="no_border">
                    <div class="collapse" id="{{ $item->id }}">
                      <div clas="row">
                          <div class="col-md-5">
                              <!-- <strong>Hình ảnh:</strong>
                              <br> -->
                              <?php $image = json_decode($item->image);?>
                              @if(is_array($image) == true)
                                @foreach ($image as $val)
                                  {{ HTML::image('storage/app/products/'.$item->slug.'/'.$val, '', array('width' => 100)) }}
                                @endforeach
                              @else
                                {{ HTML::image('storage/app/'.$item->image, '', array('width' => 100)) }}
                              @endif
                              <br>
                              <strong>Trạng thái:</strong> {{ ($item->is_active == 0)? 'Đang sử dụng' : 'Chưa sử dụng' }}
                              <br>
                              <strong>Hàng còn:</strong> {{ $item->quantity }} Sản phẩm
                              <br>
                              <table class="table table-bordered table-hover dataTable">
                                <th colspan="2" style="background: #CEF3FB; text-align: center;">Thông Số Sản Phẩm</th>
                                <?php $stt = 1 ?>
                                  @foreach($item->template as $k => $val)
                                    <tr style="{{ ($stt % 2 == 0)? 'background: #e6ede3' : '' }}">
                                      <td style="width: 50%;"><strong style="text-transform: capitalize;">{{ $k }}:</strong></td>
                                      <td>{{ $val }}</td>
                                    </tr>
                                  <?php $stt++ ?>
                                  @endforeach
                              </table>
                              <strong>Đánh giá:</strong>
                              {{-- <div class="rateit" data-rateit-value="{{ ($item->rating)? $item->rating : 0 }}"  data-rateit-readonly="true"></div> --}}
                              {{-- ({{ $item->count }} lượt đánh giá) --}}
                          </div>
                          <div class="col-md-7">
                              <table style="width: 100%">
                                  <tr>
                                      <td style="width: 50%;"><strong>Giới thiệu</strong></td>
                                      <td style="width: 50%;"><strong>Mô tả</strong></td>
                                  </tr>
                                  <tr>
                                      <td>{!! $item->description !!}</td>
                                      <td>{!! $item->content !!}</td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                    </div>
                </td>
              </tr>
            @endforeach
            </tbody>
            @if(count($products) > 0)
            <tfoot>
              <tr>
                <th width="10%" rowspan="1" colspan="1">Tên sản phẩm</th>
                <th width="10%" rowspan="1" colspan="1">Giá thành</th>
                <th width="20%" rowspan="1" colspan="1">  Khuyến mại</th>
                <th class="hidden-xs" width="10%" rowspan="1" colspan="1">Đặc biệt?</th>
                <th class="hidden-xs" width="5%" rowspan="1" colspan="1">Mới?</th>
                <th rowspan="1" colspan="2">Hành động</th>
              </tr>
            </tfoot>
            @endif
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Hiển thị {{count($products)}} sản phẩm</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection