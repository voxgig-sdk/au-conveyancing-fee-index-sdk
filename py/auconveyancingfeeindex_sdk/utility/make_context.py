# AuConveyancingFeeIndex SDK utility: make_context

from auconveyancingfeeindex_sdk.core.context import AuConveyancingFeeIndexContext


def make_context_util(ctxmap, basectx):
    return AuConveyancingFeeIndexContext(ctxmap, basectx)
