<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Repositories\ValueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Value;
use App\Models\Attribute;
use App\Models\Product;

class ValueController extends AppBaseController
{
    /** @var  ValueRepository */
    private $valueRepository;

    public function __construct(ValueRepository $valueRepo)
    {
        $this->valueRepository = $valueRepo;
    }

    /**
     * Display a listing of the Value.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->valueRepository->pushCriteria(new RequestCriteria($request));
        $values = $this->valueRepository->all();

        return view('values.index')
            ->with('values', $values);
    }

    /**
     * Show the form for creating a new Value.
     *
     * @return Response
     */
    public function create()
    {
        return view('values.create');
    }

    public function add_value($product_id)
    {
        $category_id = Product::where('id', $product_id)->first()->category_id;
        $attrs = Attribute::where('category_id', $category_id)->get();

        $array = [];
        foreach ($attrs as $attr) {
            $array = array_add($array, $attr->attr_name, $attr->attr_name);
        }

        return view('products.add_value', compact('array'))->with('product_id', $product_id);
    }

    public function edit_values($value_id, $product_id)
    {
        $value = Value::where('id', $value_id)->first();
        return view('products.edit_value', compact('value'))->with(['value_id'=> $value_id,
                                                                    'product_id' => $product_id 
                                                                ]);
    }
    /**
     * Store a newly created Value in storage.
     *
     * @param CreateValueRequest $request
     *
     * @return Response
     */
    public function store(CreateValueRequest $request)
    {
        $input = $request->all();

        $value = $this->valueRepository->create($input);

        Flash::success('Value saved successfully.');
        if(!($request->toProduct)) {
            return redirect(route('values.index'));
        } else {
            return redirect(route('show_values_of_product', [$request->toProduct]));
        }

    }

    /**
     * Display the specified Value.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $value = $this->valueRepository->findWithoutFail($id);

        if (empty($value)) {
            Flash::error('Value not found');

            return redirect(route('values.index'));
        }

        return view('values.show')->with('value', $value);
    }

    /**
     * Show the form for editing the specified Value.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $value = $this->valueRepository->findWithoutFail($id);

        if (empty($value)) {
            Flash::error('Value not found');

            return redirect(route('values.index'));
        }

        return view('values.edit')->with('value', $value);
    }

    /**
     * Update the specified Value in storage.
     *
     * @param  int              $id
     * @param UpdateValueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateValueRequest $request)
    {
        $value = $this->valueRepository->findWithoutFail($id);

        if (empty($value)) {
            Flash::error('Value not found');

            return redirect(route('values.index'));
        }

        $value = $this->valueRepository->update($request->all(), $id);

        Flash::success('Value updated successfully.');

        return redirect(route('values.index'));
    }

    /**
     * Remove the specified Value from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $value = $this->valueRepository->findWithoutFail($id);

        if (empty($value)) {
            Flash::error('Value not found');

            return redirect(route('values.index'));
        }

        $this->valueRepository->delete($id);

        Flash::success('Value deleted successfully.');

        return redirect(route('values.index'));
    }
}
