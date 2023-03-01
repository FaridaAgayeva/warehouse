@foreach($product_data as $p)
                                {{($qazanc = ($p->satis - $p->alis)*$p->miqdar)}}
                                @endforeach
                                @foreach ($orders_data as $order_qazanc)
                                @if($order_qazanc->tesdiq==1)
                                {{($cqazanc = ($order_qazanc->satis -
                                $order_qazanc->alis)*$order_qazanc->order_miqdar)}}
                                @elseif(!isset($cqazanc) and $order_qazanc->tesdiq==0)
                            {{($cqazanc=0)}}
                                @endif
                                @endforeach
            <a href="/document/'.$row->id.'" id="delete-book" data-toggle="tooltip" data-original-title="Delete" 
            public function silDoc($id){
        return view('document',[
            'dataDoc'=>document::orderBY('id','desc')->get(),
            'sildata'=>document::find($id)
        ]);

    }

    public function deleteDoc($id){
        document::find($id)->delete();
        return redirect()->route('document')->with('success','Məlumatlar uğurla silindi');

    }
    public function editDoc($id){
        
        return view('document',[
            'dataDoc'=>document::orderBY('id','desc')->where('documents.user_id','=',Auth::id())->get(),
            'editDoc'=>document::find($id)
        ]);

    }

    public function updateDoc(documentRequest $postDoc){
       
        $document = new document();

        $dsay = $document->where('basliq','=',$postDoc->basliq)->where('id','!=',$postDoc->id)->count();

        $editDoc= document::find($postDoc->id);

        if($dsay==0)
        {
            $editDoc->basliq = $postDoc->basliq;
            
            $editDoc->save();

            return redirect()->route('document')->with('success','Melumat ugurla elave edildi');
        }
        
        return redirect()->route('document')->with('success','Bu məlumatlar artiq movcuddur');

    }
    public function gonder(Request $postDoc){
        $document = new document();
        $dsay = $document->where('id','=',$postDoc->id)->count();

        if($dsay==0){
            $postDoc->validate([
                'skan' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            ]);
            if($postDoc->file('skan')){
                $file=time().'.'.$postDoc->skan->extension();
                $postDoc->skan->storeAs('public/uploads/docs/',$file);     
                $document->skan = 'storage/uploads/docs/'.$file;
            }
            else{
                $document->skan='';
            }
            $document->staff_id = $postDoc->staff_id;
            $document->basliq = $postDoc->basliq;
            $document->qeyd = $postDoc->qeyd;
            $document->user_id = Auth::id();
            $document->save();
            return redirect()->route('document')->with('success','Melumat ugurla elave edildi');

        }
            
        return redirect()->route('document')->with('success','Bu məlumatlar artıq bazada var');  
    }
    @isset($editDoc)
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded p-4">
                <form method="post" action="{{route('updateDoc',$editDoc->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Başlıq</label>
                        <input type="text" class="form-control" name="basliq" value="{{$editDoc->basliq}}">
                    </div>

                    <label class="form-control-label">Skan </label><br>
                    <input type="file" name="skan">

                    <div class="form-group">
                        <label for="exampleTextarea" class="form-control-label">Qeyd</label>
                        <textarea class="form-control" id="exampleTextarea" rows="4" name="qeyd"
                            value="{{$editDoc->qeyd}}"></textarea>
                        <input type="hidden" name="id" value="{{$editDoc->id}}">
                    </div>
                    <button type="submit" class="btn btn-outline-success m-2">Update</button>
                    <a href="{{route('document')}}">
                        <button type="submit" class="btn btn-outline-danger m-2">Decline</button>
                    </a>
                </form>
            </div>
        </div>
        @endisset
        Route::get('/sil/{id}/document','App\Http\Controllers\documentController@silDoc')->name('silDoc');
        Route::get('/delete/{id}/document','App\Http\Controllers\documentController@deleteDoc')->name('deleteDoc');
        Route::get('/edit/{id}/document','App\Http\Controllers\documentController@editDoc')->name('editDoc');
        Route::post('/update/{id}/document','App\Http\Controllers\documentController@updateDoc')->name('updateDoc');
        
        <a href="{{route('silDoc',$info->id)}}">
        <a href="{{route('editDoc',$info->id)}}">
        public function sil($id){
        return view('document',[
            'dataDoc'=>document::orderBY('id','desc')->get(),
            'silDoc'=>document::find($id)
        ]);
    }   
    public function deleteDoc($id){
        document::find($id)->delete();
        return redirect()->route('document')->with('success','Məlumatlar uğurla silindi');

    }
            