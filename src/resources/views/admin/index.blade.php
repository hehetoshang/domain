@extends('admin.layout.index')
@section('title', '后台首页')
@section('content')
<div class="lyear-layout-content">
   <div class="container-fluid">
    <div id="record" class="pt-3 pt-sm-0">
        <div class="card">
            <div class="card-header">
                域名记录
            </div>
            <div class="card-header">
                <div class="form-inline">
                    <div class="form-group">
                        <select class="form-control" v-model="search.did">
                            <option value="0">所有</option>
                            @foreach(\App\Models\Domain::get() as $domain)
                                <option value="{{ $domain->did }}">{{ $domain->domain }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ml-1">
                        <select class="form-control" v-model="search.type">
                            <option value="0">所有</option>
                            <option value="A">A记录</option>
                            <option value="CNAME">CANME</option>
                        </select>
                    </div>
                    <div class="form-group ml-1">
                        <input type="text" placeholder="UID" class="form-control" v-model="search.uid">
                    </div>
                    <div class="form-group ml-1">
                        <input type="text" placeholder="主机记录" class="form-control" v-model="search.name">
                    </div>
                    <div class="form-group ml-1">
                        <input type="text" placeholder="记录值" class="form-control" v-model="search.value">
                    </div>
                    <a class="btn btn-info ml-1" @click="getList(1)"><i class="fa fa-search"></i> 搜索</a></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户</th>
                            <th>域名</th>
                            <th>记录类型</th>
                            <th>线路</th>
                            <th>记录值</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody v-cloak="">
                        <tr v-for="(row,i) in data.data" :key="i">
                            <td>@{{ row.id }}</td>
                            <td>@{{ row.user?row.user.username:'' }}[UID:@{{ row.uid }}]</td>
                            <td>
                                <a :href="'http://'+row.name+'.'+(row.domain?row.domain.domain:'')" target="_blank">
                                    @{{ row.name }}.@{{ row.domain?row.domain.domain:'' }}
                                </a>
                            </td>
                            <td>@{{ row.type }}</td>
                            <td>@{{ row.line }}</td>
                            <td>@{{ row.value }}</td>
                            <td>@{{ row.created_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" @click="del(row.id)">删除</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pb-0 text-center">
                @include('admin.layout.pagination')
            </div>
        </div>
    </div>
    <div id="user" class="pt-3 pt-sm-0">
        <div class="card">
            <div class="card-header">
                用户列表
            </div>
            <div class="card-header">
                <div class="form-inline">
                    <div class="form-group">
                        <select class="form-control" v-model="search.gid">
                            <option value="all">所有</option>
                            @foreach(\App\Models\UserGroup::where('gid','!=',99)->get() as $group)
                                <option value="{{ $group->gid }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ml-1">
                        <input type="number" placeholder="UID" class="form-control" v-model="search.uid">
                    </div>
                    <div class="form-group ml-1">
                        <input type="text" placeholder="用户名" class="form-control" v-model="search.username">
                    </div>
                    <div class="form-group ml-1">
                        <input type="email" placeholder="邮箱地址" class="form-control" v-model="search.email">
                    </div>
                    <a class="btn btn-info ml-1" @click="getList(1)"><i class="fa fa-search"></i> 搜索</a></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>UID</th>
                            <th>用户名</th>
                            <th>组</th>
                            <th>状态</th>
                            <th>积分</th>
                            <th>邮箱</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody v-cloak="">
                        <tr v-for="(row,i) in data.data" :key="i">
                            <td>@{{ row.uid }}</td>
                            <td>@{{ row.username }}</td>
                            <td>@{{ row.group?row.group.name:'无' }}</td>
                            <td>
                                <span v-if="row.status===0">已禁用</span>
                                <span v-else-if="row.status===1">待认证</span>
                                <span v-else-if="row.status===2">已认证</span>
                            </td>
                            <td>
                                <a href="#modal-point" class="btn btn-sm btn-info" data-toggle="modal"
                                   @click="storeInfo=Object.assign({},row)">
                                    @{{ row.point }}
                                </a>
                            </td>
                            <td>@{{ row.email }}</td>
                            <td>@{{ row.created_at }}</td>
                            <td>
                                <a href="#modal-update" class="btn btn-sm btn-info" data-toggle="modal"
                                   @click="storeInfo=Object.assign({},row)">编辑
                                </a>
                                <a class="btn btn-sm btn-warning" :href="'/admin/user/point?uid='+row.uid">积分</a>
                                <a class="btn btn-sm btn-primary" :href="'/admin/domain/record?uid='+row.uid">域名</a>
                                <a class="btn btn-sm btn-danger" @click="del(row.uid)">删除</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pb-0 text-center">
                @include('admin.layout.pagination')
            </div>
        </div>
        <div class="modal fade" id="modal-point">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">用户积分操作</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-point">
                            <input type="hidden" name="action" value="point">
                            <input type="hidden" name="uid" :value="storeInfo.uid">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">操作</label>
                                <div class="col-sm-10">
                                    <select name="act" class="form-control">
                                        <option value="0">增加</option>
                                        <option value="1">扣除</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">积分</label>
                                <div class="col-sm-10">
                                    <input type="number" name="point" class="form-control" placeholder="输入积分数">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">原因</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="remark" rows="3"
                                              placeholder="输入操作原因"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" @click="form('point')">保存</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">用户修改</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-update">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="uid" :value="storeInfo.uid">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">用户名</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control"
                                           :value="storeInfo.username" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">邮箱</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control"
                                           :value="storeInfo.email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">状态</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" :value="storeInfo.status">
                                        <option value="0">已禁用</option>
                                        <option value="1">待认证</option>
                                        <option value="2">已认证</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">用户组</label>
                                <div class="col-sm-10">
                                    <select name="gid" class="form-control" :value="storeInfo.gid">
                                        @foreach(\App\Models\UserGroup::where('gid','!=',99)->get() as $group)
                                            <option value="{{ $group->gid }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">密码</label>
                                <div class="col-sm-10">
                                    <input type="text" name="password" class="form-control" placeholder="不修改密码则留空">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" @click="form('update')">保存</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div id="point" class="pt-3 pt-sm-0">
        <div class="card">
            <div class="card-header">
                积分明细
            </div>
            <div class="card-header">
                <div class="form-inline">
                    <div class="form-group">
                        <select class="form-control" v-model="search.act">
                            <option value="all">所有</option>
                            <option value="increase">增加</option>
                            <option value="reduce">减少</option>
                            <option value="消费">消费</option>
                        </select>
                    </div>
                    <div class="form-group ml-1">
                        <input type="number" placeholder="UID" class="form-control" v-model="search.uid">
                    </div>
                    <a class="btn btn-info ml-1" @click="getList(1)"><i class="fa fa-search"></i> 搜索</a></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>UID</th>
                            <th>操作</th>
                            <th>积分</th>
                            <th>剩余</th>
                            <th>详情</th>
                            <th>时间</th>
                        </tr>
                        </thead>
                        <tbody v-cloak="">
                        <tr v-for="(row,i) in data.data" :key="i"
                            :class="{'text-danger':row.point<0,'text-success':row.point>0}">
                            <td>@{{ row.id }}</td>
                            <td>@{{ row.uid }}</td>
                            <td>@{{ row.action }}</td>
                            <td>@{{ row.point }}</td>
                            <td>@{{ row.rest }}</td>
                            <td>@{{ row.remark }}</td>
                            <td>@{{ row.created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pb-0 text-center">
                @include('admin.layout.pagination')
            </div>
        </div>
    </div>
@endsection