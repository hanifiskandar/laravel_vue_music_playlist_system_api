<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSubscription;
use App\Http\Resources\UserSubscriptionResource;

class UserSubscriptionController extends Controller
{

    public function store(Request $request, $id)
    {

        $validator = $this->getValidator($request);

        if (!$validator->fails()) {

            $userSubscription = new UserSubscription();
            $userSubscription->user_id = $id;
            $userSubscription->type = $request->type;
            $userSubscription->from_month = $request->from_month;
            $userSubscription->to_month = $request->to_month;
            $userSubscription->save();

            return response()->json([
                'message' => __('Record successfully created.'),
                'data' => new UserSubscriptionResource($userSubscription),
            ]);
        } else {
            return response()->json([
                'message' => __('Error saving record.'),
                'errors' => $validator->errors(),
            ], 500);
        }
    }

    public function destroy($id)
    {

        $userSubscription = UserSubscription::find($id);

        if ($userSubscription) {
            $userSubscription->delete();

            return response()->json([
                'message' => __('Record successfully deleted.'),
                'data' => new UserSubscriptionResource($userSubscription),
            ]);
        } else {
            return response()->json([
                'message' => __('Record not found'),
            ], 404);
        }
    }

    private function getValidator($request)
    {
        $validator = \Validator::make($request->all(), [
            'type' => 'required',
            'from_month' => 'required',
            'to_month' => 'required',
        ]);

        return $validator;
    }
}
